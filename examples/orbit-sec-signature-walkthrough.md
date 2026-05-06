# Orbit Sec Signature Field Walkthrough

This walk-through keeps the domain vocabulary close to the data instead of burying it in prose.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 190 | ship |
| stress | claim drift | 98 | hold |
| edge | replay exposure | 194 | ship |
| recovery | policy width | 172 | ship |
| stale | trust boundary | 125 | watch |

Start with `edge` and `stress`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

`edge` is the optimistic case; use it to make sure the scoring path still rewards strong signal.
