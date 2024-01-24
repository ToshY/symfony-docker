<h1 align="center">🎼 Symfony Docker 🐋</h1>

<div align="center">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/phpcs.yml?branch=main&label=PHPCS" alt="Code style">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/phpmd.yml?branch=main&label=PHPMD" alt="Mess detector">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/phpstan.yml?branch=main&label=PHPStan" alt="Static analysis">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/phpunit.yml?branch=main&label=PHPUnit" alt="Unit tests">
    <img src="https://img.shields.io/github/actions/workflow/status/toshy/symfony-docker/security.yml?branch=main&label=Security" alt="Security">
    <br />
    <br />
    A webapp starting template for <a href="https://symfony.com/doc/current/setup.html">Symfony 6</a> with <a href="https://docs.docker.com/compose/install/">Docker Compose</a>.
</div>

## 📜 Introduction

This repository acts as a template to set up basic Symfony webapp with docker compose and Traefik.

### Prerequisites

* [Docker Compose (v2.21.0+)](https://docs.docker.com/compose/install/)
* [Task](https://taskfile.dev/installation/)
* [Reverse proxy | Traefik](https://doc.traefik.io/traefik/) (Optional)
    * It is assumed that the user has a working development setup for [Traefik](https://doc.traefik.io/traefik/).

> Note: You can switch out Traefik for any other reverse proxy of your choice (or not use a reverse proxy at all), but
> this would require additional tweaking of labels (or exposing ports) in the docker compose configuration.

## 🎬 Get Started

### Update hosts file

Add `webapp.local` to your hosts files, e.g. `/etc/hosts` (Unix).

### Initialise dotenv

For first time setup, initialise the `.env.local` from the `.env`.

```shell
task init
```

You can now tweak the values in the `.env.local` if needed.

### Start application services

```shell
task up
```

### Visit the application

If the reverse proxy is configured correctly, you should be able to visit `webapp.local` in your browser and be
greeted by Symfony's default landing page.

> Note: You can disregard the SSL certificate warnings for development usages.

## 🛠️ Contribute

### Install dependencies

```shell
task app:install:dev
```

### Enable GrumPHP

```shell
task grum:init
```

### Manual test run

```shell
task contribute
```

## 🧰 DIY

If you want to create a Symfony project from scratch yourself, with the essential dependencies, you
can do the following:

```shell
# Substitute "dev.example.com" with desired project directory name
docker run --rm -it -v $(pwd):/app composer:2 create-project symfony/skeleton:6.4.* dev.example.com
docker run --rm -it -v $(pwd)/dev.example.com:/app composer:2 require webapp -n
sudo chown -R $(id -u):$(id -g) $(pwd)/dev.example.com
 ```

This will give you a basic Symfony webapp environment (without Docker).

## ❕ Licence

This repository comes with a [MIT license](./LICENSE).
