# orbit-sec-signature-field

`orbit-sec-signature-field` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to implement a PHP security tooling project for signature state machine modeling, using transition tables and invalid-transition tests.

## Reason For The Project

I want this repository to be useful as a quick reading exercise: fixtures first, implementation second, verifier last.

## Orbit Sec Signature Field Review Notes

Start with `replay exposure` and `claim drift`. Those cases create the widest score spread in this repo, so they are the best quick check when the model changes.

## What It Does

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/orbit-sec-signature-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `replay exposure` and `claim drift`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## How It Is Put Together

The fixture data drives the tests. The code stays thin, while `metadata/domain-review.json` and `config/review-profile.json` explain what each case is meant to protect.

The PHP addition stays small enough to inspect in one sitting.

## Run It

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Check It

The check exercises the source code and the review fixture. `edge` is the high score at 194; `stress` is the low score at 98.

## Boundaries

The fixture set is small enough to audit by hand. The next useful expansion is malformed input coverage, not extra surface area.
