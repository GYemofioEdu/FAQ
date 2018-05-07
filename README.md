# FAQ
An introductory FAQ project - app for generating, storing and retrieving FAQs

To run the faq project:

1. git clone https://github.com/GYemofioEdu/FAQ.git
2. cd into faq and run composer install
3. cp .env.example to .env
4. run: php artisan key:generate
5. setup database with sqlite or other - see https://laravel.com/docs/5.6/database
6. run: php artisan migrate
7. run unit tests: phpunit
8. seed the db: php artisan migrate:refresh --seed
====================================

To test up-vote for questions do the following
1. Log-in, or register and create questions and answers
2. View a quetion with answers
    - notice:
        a) info on when answer was created
        b) he vote counts on each answer
3. View an answer
    - notice the vote up button
4. Click on vote_up button if you like the answer
5. Go back to home and navigate to the question
6. View the question
    - notice that vote count was incremented
====================================

To run baseline localization tests (front-end)
1. Start the app: http://localhost:8000
2. Go to http://localhost:8000/localization/en
    - Expect "Laravel Internationalization example."
3. Go to http://localhost:8000/localization/de
    - Expect "Laravel Internationalisierung Beispiel." 
4. Go to http://localhost:8000/localization/fr
      - Expect "Exemple Laravel internationalisation."
        


 
