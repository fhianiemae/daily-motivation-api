# Daily Study Motivation API

## Description
An API that provides students with daily motivation tailored to academics.

### Features
- Daily Quote
- Study Tip
- Daily Challenge

## Installation
1. Install PHP, Composer, XAMPP, Git
2. Clone repo: `git clone https://github.com/YOUR_USERNAME/daily-motivation-api.git`
3. `cd daily-motivation-api`
4. `composer install`
5. Copy `.env.example` to `.env` and set DB credentials
6. `php artisan key:generate`
7. `php artisan migrate --seed`
8. `php artisan serve`

## API Endpoint
GET `/api/motivation/today`

### Example Response
```json
{
  "date": "2025-08-29",
  "quote": "Education is the most powerful weapon you can use to change the world. – Nelson Mandela",
  "study_tip": "Use the Pomodoro technique: 25 minutes study, 5 minutes rest.",
  "challenge": "Summarize today’s lesson in 3 bullet points."
}
