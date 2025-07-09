document.addEventListener( 'DOMContentLoaded', () => {
	const API_URL =
		'https://api.wordpress.org/plugins/info/1.2/?action=query_plugins&request[fields][banners]=true&request[search]="Niels Lange"';
	const placeholder = document.querySelector( '#plugins_stats' );

	const formatNumber = ( number ) => new Intl.NumberFormat( 'en-US' ).format( number );

	const renderPluginCard = ( plugin ) => {
		const bannerUrl = plugin.banners?.low || '';
		return `
			<div class="grid__item">
				<div class="plugin-banner">
					<img src="${ bannerUrl }" alt="${ plugin.name }" class="plugin-banner__image">
					<h4 class="plugin-banner__title">${ plugin.name }</h4>
				</div>
				<div class="grid grid--2-cols grid--no-alternate grid--narrow grid--plugin-buttons">
					<div class="grid__item">
						<a href="https://wordpress.org/plugins/${
							plugin.slug
						}" class="plugin-button button">🔎 &nbsp; View on WordPress.org</a>
					</div>
					<div class="grid__item">
						<a href="${ plugin.download_link }" class="plugin-button button">💾 &nbsp; Download</a>
					</div>
				</div>
				<table class="wp-block-table is-style-stripes">
					<tr>
						<td>Version</td>
						<td align="right">${ plugin.version }</td>
					</tr>
					<tr>
						<td>Tested up to</td>
						<td align="right">${ plugin.tested }</td>
					</tr>
					<tr>
						<td>Requires WordPress</td>
						<td align="right">${ plugin.requires }</td>
					</tr>
					<tr>
						<td>Requires PHP</td>
						<td align="right">${ plugin.requires_php }</td>
					</tr>
					<tr>
						<td>Downloaded</td>
						<td align="right">${ formatNumber( plugin.downloaded ) }</td>
					</tr>
				</table>
			</div>
		`;
	};

	const renderSummary = ( downloads, installs ) => `
		<div class="highlight">
			🎉 🎉 🎉 &nbsp; In total, my plugins have been <strong>downloaded ${ downloads } times</strong> and <strong>installed ${ installs } times</strong>. &nbsp; 🎉 🎉 🎉
		</div>
	`;

	const renderError = () => `
		<div class="highlight">
			🚨 🚨 🚨 &nbsp; An error occurred while loading the plugin stats. &nbsp; 🚨 🚨 🚨
		</div>
	`;

	const fetchAndRenderPlugins = async () => {
		try {
			const response = await fetch( API_URL );
			const data = await response.json();
			const plugins = data.plugins || [];

			plugins.sort( ( a, b ) => b.downloaded - a.downloaded );

			let totalDownloads = 0;
			let totalInstalls = 0;

			const pluginCards = plugins
				.map( ( plugin ) => {
					totalDownloads += plugin.downloaded;
					totalInstalls += plugin.active_installs;
					return renderPluginCard( plugin );
				} )
				.join( '' );

			const summaryHTML = renderSummary( formatNumber( totalDownloads ), formatNumber( totalInstalls ) );
			const gridHTML = `<div class="grid grid--2-cols grid--no-alternate">${ pluginCards }</div>`;

			placeholder.innerHTML = summaryHTML + '<br><br>' + gridHTML;
		} catch ( error ) {
			console.error( error );
			placeholder.innerHTML = renderError();
		}
	};

	fetchAndRenderPlugins();
} );
