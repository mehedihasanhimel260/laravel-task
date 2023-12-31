Fast run:<br>
composer i<br>
then:<br>
npm i<br>
then:<br>
cp .env.example .env<br>
then:<br><br>
php artisan key:generate<br>
then:<br>
npm run dev<br>
php artisan migrate:refresh --path='./database/migrations/2023_12_16_044934_create_rounds_table.php' <br>
php artisan route:list --name=player-ranking<br>
php artisan optimize:clear<br>
