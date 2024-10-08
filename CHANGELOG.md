# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

To get the diff for a specific change, go to https://github.com/SonsOfPHP/sonsofphp/commit/XXX where XXX is the change hash
To get the diff between two versions, go to https://github.com/SonsOfPHP/sonsofphp/compare/v0.3.4...v0.3.5

## [Unreleased]

## [0.3.9]

* [PR #228](https://github.com/SonsOfPHP/sonsofphp/pull/228) [Bard] Various updates
* [PR #227](https://github.com/SonsOfPHP/sonsofphp/pull/227) [Cache] FilesystemAdapter, Marshallers, and other updates
* [PR #226](https://github.com/SonsOfPHP/sonsofphp/pull/226) [Registry] New Component and Contract
* [PR #225](https://github.com/SonsOfPHP/sonsofphp/pull/225) Maintenance
* [PR #222](https://github.com/SonsOfPHP/sonsofphp/pull/222) [Assert] New Component
* [PR #221](https://github.com/SonsOfPHP/sonsofphp/pull/221) [StateMachine] New Contract and Component
* [PR #220](https://github.com/SonsOfPHP/sonsofphp/pull/220) [Filesystem] Adds bridges for AWS and LiipImagineBundle
* [PR #214](https://github.com/SonsOfPHP/sonsofphp/pull/214) [Logger] Bug fixes and updates
* [PR #51](https://github.com/SonsOfPHP/sonsofphp/pull/51) Added new Filesystem component
* [PR #59](https://github.com/SonsOfPHP/sonsofphp/pull/59) Added new HttpMessage component
* [PR #59](https://github.com/SonsOfPHP/sonsofphp/pull/59) Added new HttpFactory component
* [PR #70](https://github.com/SonsOfPHP/sonsofphp/pull/70) Added new Core contract
* [PR #112](https://github.com/SonsOfPHP/sonsofphp/pull/112) [Cache] Added new component
* [PR #119](https://github.com/SonsOfPHP/sonsofphp/pull/119) [HttpMessage] Added `withQueryParams` and `withQueryParam` to `Uri`
* [PR #120](https://github.com/SonsOfPHP/sonsofphp/pull/120) [Logger] New Component
* [PR #133](https://github.com/SonsOfPHP/sonsofphp/pull/133) [Pager] New Contract
* [PR #134](https://github.com/SonsOfPHP/sonsofphp/pull/134) [Pager] New Component
* [PR #170](https://github.com/SonsOfPHP/sonsofphp/pull/170) [Link] New Component (PSR-13)
* [PR #173](https://github.com/SonsOfPHP/sonsofphp/pull/173) [Money] Twig Bridge
* [PR #181](https://github.com/SonsOfPHP/sonsofphp/pull/181) [Cookie] New Component and Contract
* [PR #182](https://github.com/SonsOfPHP/sonsofphp/pull/182) [Container] New Component (PSR-11)
* [PR #187](https://github.com/SonsOfPHP/sonsofphp/pull/187) [HttpHandler] New Component (PSR-15) and Contract
* [PR #190](https://github.com/SonsOfPHP/sonsofphp/pull/190) [Mailer] New Component and Contract
* [PR #202](https://github.com/SonsOfPHP/sonsofphp/pull/202) [EventDispatcher] Added Stoppable Event Code

## [0.3.8]

Forgot to add stuff ;p

## [0.3.7]

* [event-sourcing]
  * Deprecated `::new` for Aggregates
  * Updated code to remove deprecations from libraries
* [event-sourcing-symfony]
  * Removing deprecated files

## [0.3.6]

* Changed min PHP version to 8.1 for all packages
* [EventSourcing] Added MessagePayload and MessageMetadata classes
* [EventSourcing] Deprecated classes in Symfony Bridge to better organize the library
* [CQRS] Adding Symfony Bundle

[Unreleased]: https://github.com/SonsOfPHP/sonsofphp/compare/v0.3.10...HEAD
[0.3.9]: https://github.com/SonsOfPHP/sonsofphp/compare/v0.3.9...v0.3.10
[0.3.8]: https://github.com/SonsOfPHP/sonsofphp/compare/v0.3.8...v0.3.9
[0.3.7]: https://github.com/SonsOfPHP/sonsofphp/compare/v0.3.7...v0.3.8
[0.3.6]: https://github.com/SonsOfPHP/sonsofphp/compare/v0.3.6...v0.3.7
[0.3.5]: https://github.com/SonsOfPHP/sonsofphp/compare/v0.3.5...v0.3.6
