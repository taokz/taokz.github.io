# taokz.github.io

Personal site of Kai Zhang, built with [Hugo](https://gohugo.io/) and deployed to
GitHub Pages by `.github/workflows/hugo.yml` on every push to `main`.

The layout, styles and head are the site's own (`layouts/`, `assets/css/site.css`),
ported from the approved design prototype. The [PaperMod](https://github.com/adityatelange/hugo-PaperMod)
theme (git submodule) still supplies RSS, robots.txt, the 404 page and shortcodes.

## Editing

| What | Where |
| --- | --- |
| Sidebar: name, role, affiliation, contacts, degree | `hugo.toml` → `[params.profile]` |
| Navigation | `hugo.toml` → `[menus]` |
| About statement | `content/_index.md` |
| Selected Publications (themes and papers on the home page) | `data/research.yaml` |
| Publication data (authors, venues, links) | `data/publications.yaml` |
| Blog posts | `content/blog/<slug>/index.md` |
| Styles | `assets/css/site.css` |
| Icon | `static/favicon.svg` |

Author lists longer than six names are shortened on the page (first 3, …, Kai Zhang, …,
last 2); keep the full list in `data/publications.yaml`.

The `/publications/` page is switched off for now; see the note in
`content/publications.md` to turn it back on. The CV link is hidden until
`static/cv.pdf` exists; see the note in `hugo.toml`.

A post's front matter:

```yaml
---
title: "Post title"
date: 2026-11-04
description: "One-line summary shown in the blog list and on the home page."
# toc: false        # the table of contents is on by default
# draft: true
---
```

Math (`$…$`, `$$…$$`) is rendered to HTML at build time with KaTeX; footnotes use `[^1]`.

## Local preview

```bash
git submodule update --init --recursive
hugo server   # Hugo extended ≥ 0.158 (CI uses 0.168.0)
```

`static/biomedbank/` and `static/md_eval/` are standalone pages served as-is.
