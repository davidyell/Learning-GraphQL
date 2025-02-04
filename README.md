# Learning GraphQL with Laravel and Livewire

This is an example app to learn more about creating GraphQL Api endpoints using Laravel.

## What is it?

A graphql api for Magic the Gathering Cards!

## Install

-   Clone repo
-   `composer install`
-   `./vendor/bin/sail up -d`
-   `./vendor/bin/sail artisan migrate:fresh --seed`
-   `./vendor/bin/sail npm run build`

Visit http://localhost

## Fake data

There is a card seeder which will create 100 random cards, using Faker data.

`./vendor/bin/sail artisan db:seed --seeder CardSeeder`

## Real data

If you want to use actual data you can download the 'Standard' format json from https://mtgjson.com/downloads/all-files/#standard 
and save it into the `/app/database` folder and run the seeder `artisan db:seed StandardSeeder` which will 
populate the database with all the cards from the Standard format.

To have the Sets also, you'll need to download the `SetList` from https://mtgjson.com/downloads/all-files/#setlist and
save it into the `/app/database` folder and run the seeder `artisan db:seed SetSeeder` which will
populate the database with the card set data.

[More info on WhatsInStandard.com](https://whatsinstandard.com/)

## GraphQL

The project includes [GraphIQL](https://github.com/mll-lab/laravel-graphiql), you can make use of the client by installing Composer `dev` dependancies and
then visit http://localhost/graphiql

### Example queries

Get all the cards, but only a few fields, paginated by 20 per page on page 4

```graphql
{
    cards(first: 20, page: 4) {
        data {
            id
            name
            types
        }
        paginatorInfo {
            currentPage
            lastPage
        }
    }
}
```

Get just a single card

```graphql
{
    card(id: 3) {
        id
        name
        flavorName
        flavorText
    }
}
```

Create a new user

```graphql
mutation {
  createUser(name:"David", email:"neon1024@gmail.com", password:"GiantBananaBoat") {
    name
    email
    created_at
    updated_at
  }
}
```

## References

🎓 Learn to play Magic the Gathering! https://magic.wizards.com/en/intro

🙅 Not officially affiliated or endorsed by Wizards of the Coast or Magic the Gathering

🙇‍♂️ Thanks to MTGJSON for their free data https://mtgjson.com/downloads/all-files/
