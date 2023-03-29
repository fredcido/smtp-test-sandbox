# Nette mailer sandbox

- [Nette mailer sandbox](#nette-mailer-sandbox)
  - [Build](#build)
  - [Set env vars](#set-env-vars)
  - [Run](#run)


## Build

```sh
docker build . -t nette-mailer
```

## Set env vars

```sh
cp .env.sample .env
```

And replace the vars values in the `.env` file

## Run

```sh
docker run -it --env-file .env --rm -v "$(pwd)/index.php:/home/runner/index.php"  nette-mailer
```