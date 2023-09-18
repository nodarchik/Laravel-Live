
## About Project

THis Laravel project for laravel-live-coding testing.
You have to do 3 task here using your knowledge of PHP / Laravel / DB and best-practise (SOLID)

### Our Stack
1. PHP 8.0
2. Laravel Framework 9.52.15
3. Postgresql 16.0
4. Docker
5. NGINX (http://127.0.0.1:8010/api/)

##### I prepared few steps to install this project on your PC (Linux).
- git clone https://github.com/DeSKot/Laravel-live-coding
- add .env file and cope data from .env.example
- docker-compose up
- docker exec -it laravel-live-coding bash
- composer install
- php artisan migrate

## Task 1. Display Info about users and his wallets

#### 1. Create branch from main and call it like that "yourName-task-numberOfTask": "Dima-task-1"

#### 2. Create table *_"users"_* with follow requirements
| id      | name | email | phone | photo |
|---------|------|-------|-------|-------|
1. name = required / max-size = 256
2. email = required / uniq / max-size = 512
3. phone = can be null / max-size = 32
4. photo = max-size = 1024 / default value = https://d3jqtupnzefbtn.cloudfront.net/andersenlab/new-andersensite/testimonials/60x60/without-photo.png
#### 3. Create table *_"currencies"_* with follow data inside and requirements
| id | name | 
|----|------|
| 1  | USD  |
| 2  | EUR  |
1. name - required / uniq / max-size = 4
#### 4. Create table *_wallets_* with follow requirements
| id      | amount | user_id | currency_id |
|---------|--------|---------|-------------|
1. amount - required
2. user_id - user id
3. currency_id - currency id

#### 5. Write in this tables some information 

#### 6. Create end-point /user where you display info in following structure

[
{
"name": "Dima",
"email": "@gmail.com",
"phone": "+38000000000",
"photo": "https://d3jqtupnzefbtn.cloudfront.net/andersenlab/new-andersensite/testimonials/60x60/without-photo.png",
"wallets": [
{
"currency": "USD",
"amount": 12321314124134e312321
},
{
"currency": "EUR",
"amount": 12321314124134e312321
}
]
},
{
"name": "Mariya",
"email": "@gmail.com",
"phone": "+3800312300000",
"photo": "https://d3jqtupnzefbtn.cloudfront.net/andersenlab/new-andersensite/testimonials/60x60/without-photo.png",
"wallets": [
{
"currency": "USD",
"amount": 12321314124134e312321
},
{
"currency": "EUR",
"amount": 12321314124134e312321
}
]
}
]

#### 7. push this branch to remount repo and create Merge Request

## Task 2. Transaction between wallets

First of all you have to have created two users with wallet USD currency for each user

**TO DO: Do transaction between wallets.**<br>

That all description, you have to come up with logic and realisation.<br>
We will check how you can translate Owner task into code

## Useful Commands
grep -w '5432/tcp' /etc/services - check which service using this port
sudo systemctl stop <service-name> - stop /start / restart / status of the service
