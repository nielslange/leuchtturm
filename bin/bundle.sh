#!/bin/bash

# Set variables
THEME_SLUG="leuchtturm"
PROJECT_ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
VERSION=$(grep -i "Version:" "$PROJECT_ROOT/style.css" | sed -n 's/.*Version: *\([^ ]*\).*/\1/p')
TEMP_DIR="/tmp/$THEME_SLUG"
ZIP_FILE="${THEME_SLUG}-${VERSION}.zip"

# Clean up any existing temporary directory
rm -rf "$TEMP_DIR"
mkdir -p "$TEMP_DIR"

# Copy required files
cp -r \
    "$PROJECT_ROOT/style.css" \
    "$PROJECT_ROOT/screenshot.png" \
    "$PROJECT_ROOT/index.php" \
    "$PROJECT_ROOT/header.php" \
    "$PROJECT_ROOT/footer.php" \
    "$PROJECT_ROOT/functions.php" \
    "$PROJECT_ROOT/front-page.php" \
    "$PROJECT_ROOT/404.php" \
    "$PROJECT_ROOT/inc" \
    "$PROJECT_ROOT/template-parts" \
    "$PROJECT_ROOT/assets" \
    "$PROJECT_ROOT/LICENSE" \
    "$PROJECT_ROOT/README.md" \
    "$TEMP_DIR/"

# Remove development files and directories
rm -rf "$TEMP_DIR/assets/src"
find "$TEMP_DIR" -name "*.map" -type f -delete
find "$TEMP_DIR" -name ".DS_Store" -type f -delete
find "$TEMP_DIR" -name ".git*" -type f -delete
find "$TEMP_DIR" -name "*.yml" -type f -delete
find "$TEMP_DIR" -path "*/inc/acf-json/*" -prune -o -name "*.json" -type f -delete
find "$TEMP_DIR" -name "*.lock" -type f -delete
find "$TEMP_DIR" -name "*.cache" -type f -delete
find "$TEMP_DIR" -name ".editorconfig" -type f -delete
find "$TEMP_DIR" -name ".prettier*" -type f -delete
find "$TEMP_DIR" -name ".stylelint*" -type f -delete
find "$TEMP_DIR" -name ".phplint*" -type f -delete
find "$TEMP_DIR" -name ".nvmrc" -type f -delete
find "$TEMP_DIR" -name ".wp-env*" -type f -delete
find "$TEMP_DIR" -name "phpcs.xml" -type f -delete

# Create zip file
cd /tmp
rm -f "$ZIP_FILE"
zip -r "$ZIP_FILE" "$THEME_SLUG"

# Move zip file to project root
mv "/tmp/$ZIP_FILE" "$PROJECT_ROOT/$ZIP_FILE"

# Clean up
rm -rf "$TEMP_DIR"

echo "✅ Theme bundle created: $PROJECT_ROOT/$ZIP_FILE"
