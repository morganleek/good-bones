# Good Bones
Good Bones is an empty framework to build Wordpress themes with Gutenberg

```bash
# Install dependencies
npm install
```

## Start Checklist
1. Copy `config-sample.json` to `config.json` and update with your local development environment details and custom theme details.
2. Create `screenshot.png` based on site design.

```bash
# Dev
gulp 
# Build
gulp build --prod
```

## Deploy Checklist
1. Run `gulp bundle --prod`.
2. Copy `wp-content/themes/{project-name}` to live location.