# taokz.github.io

Personal site of Kai Zhang, built with [Hugo](https://gohugo.io/) and the
[PaperMod](https://github.com/adityatelange/hugo-PaperMod) theme (git submodule),
deployed to GitHub Pages by `.github/workflows/hugo.yml` on every push to `main`.

## Editing

| What | Where |
| --- | --- |
| Name, title, header links (Email · Scholar · GitHub · X · CV) | `hugo.toml` → `[params.profile]` |
| Research statement | `content/_index.md` (remove `statementPlaceholder` when done) |
| Selected Research themes on the home page | `data/research.yaml` |
| Full publication list | `data/publications.yaml` |
| Posts | `content/writing/<slug>/index.md` |
| CV | add `static/cv.pdf` |
| Styles | `assets/css/extended/custom.css` |

A post's front matter:

```yaml
---
title: "Post title"
date: 2026-11-04
description: "One-line subtitle shown on /writing and the home page."
# ShowToc: false     # TOC is on by default
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
