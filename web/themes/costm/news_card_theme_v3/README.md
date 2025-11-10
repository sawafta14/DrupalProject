# News Card Theme — v2
- Includes templates for both **Card** and **Teaser** view modes.
- Includes optional **Views override** (Twig grid). Default CSS already makes a 3‑column grid.

## Install
1. Copy folder to: `themes/custom/news_card_theme`
   - Folder name **must match** the machine name in files (`news_card_theme`).

2. Enable from **Appearance** and set as default front-end theme.

3. Clear caches.

## Use
- In your View → "Unformatted list of Rendered entity" then choose **Card** or **Teaser**.
- If your content type machine name is not **news**, rename templates accordingly:
  - `node--YOURBUNDLE--card.html.twig`
  - `node--YOURBUNDLE--teaser.html.twig`

## Optional Views Twig
- If you prefer Twig grid, copy `templates/views-view-unformatted--latest-news--block.html.twig`
  and rename `latest-news`/`block` to your view machine name & display ID.