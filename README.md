# sidemaya
Sistem Informasi Desa Manud Jaya

## Setup

Steps:
- Install Docker Desktop
- Install Github Desktop
- Checkout this project
- Start cmd at checkout location
    - `cd laradock-sidemaya/`
    - `docker-compose up -d nginx mysql`
    - `docker-compose exec --user=laradock workspace bash`
- Access http://127.0.0.1/


## Development

### Update laradock-sidemaya
git submodule update --recursive --remote