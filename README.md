# saleor-platform with configured logging

**This is a clone of [saleor-platform](https://github.com/mirumee/saleor-platform) with logging configured for experiments, and generated tests by [AutoGraphQL](https://github.com/louisezetterlund/autographql).**

---

## Changes needed for logging
- A new model, `saleor-platform/saleor/autographql/`; Apply migrations with:
  - `python manage.py makemigrations autographql`
  - `python manage.py migrate`
- `saleor-platform/saleor/settings.py`
- `saleor/graphql/autographqlmiddleware.py`
- `saleor/graphql/views.py`

## Running tests under `/autographqltests/`
- Install [composer](https://getcomposer.org/)
- Add `composer.json`
- Install [PHPUnit](https://phpunit.de/index.html)
- `composer update`
- Run tests from `saleor-platform/saleor/` with `autographqltests/vendor/bin/phpunit autographqltests/`
