# Changelog

All notable changes to `socius-models` will be documented in this file

## 4.0.0 - 2022-07-24

- BREAKING CHANGE: compatibility only with PHP 8.0 & Laravel 9.x

## 3.2.2 - 2021-11-18

- Fixed auto-merge

## 3.2.1 - 2021-11-18

- Fixed auto-merging on dependabot's updates
- `commit-msg` regex updated
- Fixed names of jobs & slack notifications in pipelines

## 3.2.0 - 2021-11-17

- Added `composer-git-hooks`
- Configured hooks with auto-install/update
- Added timeouts in pipelines
- Added  auto-merge pipeline for small updates made by dependabot
- Added `x-ray`
- Added `x-ray` checking in CI pipeline
- Added `x-ray` checking in git hooks
- Added `changelog-updater-action` to CD pipeline

## 3.1.1 - 2021-11-08

- Updated Larastan to `1.0.1`

## 3.1.0 - 2021-11-01

- Added code quality tools such as PHP_CS_Fixer, PHP Insights & PHPStan
- Added scanning & formatting code with those tools in CI pipeline
- Applied formatting on code base

## 3.0.0 - 2021-09-29

- Merged migrations into one for `products`
- New model, migration, factory, DTO & DTO's factory for Product Attachments
- Updated unit tests
- Removed `attachments` field from `Product` model
- Unified timestamps in migrations, models & DTOs

## 2.4.4 - 2021-09-13

- Updated ServiceProvider: added new migration to publishing

## 2.4.3 - 2021-09-13

- Added `eshopImage` field in Product
- New migration for `products` table
- Style fixes applied

## 2.4.2 - 2021-08-21

- Added PHPInsights config file

## 2.4.1 - 2021-08-30

- Small tweaks in Product & Customer DTOs and migrations

## 2.4.0 - 2021-08-26

- Added availability fields in Product
- Added PHPStan
- Added PHP_CS Fixer
- Added PHP Insights
- Fixed style & PHPDoc errors

## 2.3.0 - 2021-05-27

- New field in Product
- Updated nullables in Product migration & DTO

## 2.2.0 - 2021-05-14

- Use `socius-dto` instead of `relationship-data-transfer-object`
- Updated migrations: now every `xl_id` are `unique()`

## 2.1.0 - 2021-04-30

- Updated `relationship-data-transfer-object`
- DTO v3
- Created Caster for Carbon fields
- Created Casters for all enum fields

## 2.0.1 - 2021-04-29

- Bugs fixed

## 2.0.0 - 2021-04-28

- Changed migration publishing - now it uses .stub & generating timestamp in name to simplify migrations updating process
- Created generator commands for each model & factory for fast & easy creating local versions
- Changed all field names in models to snake_case, field names in DTOs remain as camelCase

## 1.4.1 - 2021-03-30

- Updated dependencies

## 1.4.0 - 2021-02-26

- Created a new block: Order
- Two new models: Order & OrderElement + factories for them
- Two new tables: orders & order_elements
- DTOs for new models in Order block + data factories for them
- Tests refactored
- Removed DTO Collections
- Updated Warehouse migration, model
- Added type of Warehouse

## 1.3.0 - 2021-02-24

- Dropped operator relationships
- Updated dependencies

## 1.2.3 - 2021-02-22

- Bug fixed in products migration

## 1.2.2 - 2021-02-19

- Added relationship between a product and category

## 1.2.1 - 2021-01-27

- Updated models factories

## 1.2.0 - 2021-01-27

- Added `grixu/relationship-data-transfer-objects`
- All DTOs base class changed to RelationshipDataTransferObject
- Updated tests
- Updated data factories
- Updated migrations: all FKs are nullable now

## 1.1.6 - 2021-01-26

- Bug fixed: operator filed will always be created in Product
- Bug fixed: operator field will always be created in Customer table
- Bug fixed: product field will always be created in Stock table
- Bugs fixed: customer & operator fields will always be created in Warehouse table
- Added tests for check is mandatory (empty relationship) fields are creating
- Changed config name from `md5_local_model_field` to `checksum_field`

## 1.1.5 - 2021-01-21

- Bugs fixed: Added relationship fields to `$fillable`

## 1.1.4 - 2021-01-20

- Many small bugs fixed
- Updated to PHP8

## 1.1.3 - 2021-01-19

- Added foreign key in products for relationship with Operator
- Updated Product model
- Updated migration & model tests

## 1.1.2 - 2021-01-19

- Bug fix in product_descriptions migration
- Changed foreign key names in DTOs (from xlForeignId to foreignId)

## 1.1.1 - 2021-01-18

- Bug fixes in migrations

## 1.1.0 - 2021-01-18

- Refactored models, migration: changed fields notation from the snake_case to camelCase
- Added DTOs and DTO Collections
- Added DataFactories

## 1.0.0 - 2021-01-15

- initial release
