---
title: "On Writing Things Down"
date: 2026-11-04
description: "A placeholder post — why this page exists, and what will go here."
math: true
draft: true   # hidden until a real post replaces it
---

*This is a placeholder post. It exists so the writing page is not empty, and so
every element a post can use — headings, math, code, footnotes, a figure — has
been rendered at least once. Replace it, or set `draft: true` in the front matter
to hide it.*

## Why write

Papers are written for reviewers. Posts can be written for the reader who wants
the idea in its simplest honest form, with the caveats that did not fit into eight
pages.[^1]

## Math

Inline math such as $p(y \mid x) = \sum_z p(y \mid z)\,p(z \mid x)$ is rendered at
build time with KaTeX, so no JavaScript runs in the reader's browser. Display math
works with `$$ … $$` or `\[ … \]`:

$$
\mathcal{L}(\theta) = -\,\mathbb{E}_{(x, y) \sim \mathcal{D}} \left[ \sum_{t=1}^{|y|} \log p_\theta\!\left(y_t \mid y_{<t}, x\right) \right]
$$

## Code

```python
def evaluate(agent, cases):
    """Score an agent on a list of (input, reference) cases."""
    scores = [agent.judge(agent(x), ref) for x, ref in cases]
    return sum(scores) / len(scores)
```

### A shorter subsection

Subsections appear in the table of contents, which sits beside the text on wide
screens and collapses above it on narrow ones.

## References

Long-form posts end with a plain list of references:

1. Author, A. *Title of the paper.* Venue, 2026.
2. Author, B. *Another paper.* Venue, 2025.

[^1]: Footnotes look like this, and link back to where they were cited.
