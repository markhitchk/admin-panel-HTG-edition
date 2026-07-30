# Harley's Admin Theme for Flarum

A standalone, configurable Flarum **admin dashboard theme** for Harley's Clan Forum. It loads only in Flarum's `admin` frontend and does not depend on the Private Messages extension or any other community extension.

## Features

- Cyan glassmorphic admin dashboard matching the public Harley's Clan Forum theme
- Admin extension settings for accent, secondary glow, background, panel, text, and muted colors
- Your Harley-The-Gamer puppy logo bundled directly into the theme, with PNG and SVG source files
- Configurable panel opacity, borders, glow, shadows, glass blur, corner radius, custom logo URL, and logo size
- Toggles for the logo, 3D title, background effects, animations, and compact mode
- Admin-only custom CSS field
- Responsive styling for desktop and mobile admin pages
- Preserves extension icon colors and important success, warning, and danger states
- Compatible with Flarum 1.8.x

## Self-hosted installation

After publishing the package to Packagist:

```bash
composer require markhitchk/flarum-admin-theme:"*"
php flarum cache:clear
```

Then enable **Harley's Admin Theme** from the Flarum administration dashboard. Open its extension page to change the theme settings.

## FreeFlarum installation

FreeFlarum administrators cannot upload arbitrary ZIP files or Composer packages directly. To make this installable on FreeFlarum:

1. Create a public GitHub repository named `flarum-admin-theme` under the `markhitchk` account.
2. Upload the **contents** of this package to the repository root.
3. Create a `v1.1.0` Git tag/release.
4. Submit the repository to Packagist using the package name `markhitchk/flarum-admin-theme`.
5. Request the extension through FreeFlarum's extension-request process.

FreeFlarum must review and add it before it can be enabled on a hosted forum.

## Development

The included `js/dist/admin.js` is ready to use. To rebuild it after editing `js/src/admin/index.js`:

```bash
cd js
npm install
npm run build
```

Clear Flarum's cache after changing JavaScript or LESS:

```bash
php flarum cache:clear
```
## License

MIT
