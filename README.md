# WordPress install with Docker and Composer

- Requirements
- Install
- Uninstall

## Requirements
- Docker Machine (optional)
- Docker
- Docker Compose
- Composer

## Install

### Docker Machine (optional)
Installed docker-machine on GitBash for Windows

```shell
$ if [[ ! -d "$HOME/bin" ]]; then mkdir -p "$HOME/bin"; fi && \
curl -L https://github.com/docker/machine/releases/download/v0.8.2/docker-machine-Windows-x86_64.exe > "$HOME/bin/docker-machine.exe" && \
chmod +x "$HOME/bin/docker-machine.exe"
```

Create a set the docker machine to the current shell with elevated privileges

```shell
$ docker-machine create --driver hyperv wordpress-install 
$ docker-machine env wordpress-install
$ eval $("C:\Users\Greg\bin\docker-machine.exe" env wordpress-install)
```

### Composer

### Docker Compose

## Uninstall

### Remove Docker Machine (optional)

### Remove Containers

### Remove images

