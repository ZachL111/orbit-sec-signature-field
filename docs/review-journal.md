# Review Journal

This journal records the domain cases that matter before widening the public API.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 190, lane `ship`
- `stress`: `claim drift`, score 98, lane `hold`
- `edge`: `replay exposure`, score 194, lane `ship`
- `recovery`: `policy width`, score 172, lane `ship`
- `stale`: `trust boundary`, score 125, lane `watch`

## Note

The repository should be understandable without pretending it is larger than it is.
