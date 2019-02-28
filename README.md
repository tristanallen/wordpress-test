WordPress Test
==============

Please read this readme all the way to the end before starting.

### Introduction

This is a WordPress project setup using [Bedrock](https://roots.io/bedrock/) and [Sage](https://roots.io/sage/).

Do not worry if you are not familiar with them - this test does not test any specific knowledge of the setup.

Please add some level of commenting in your work to show your thought process.

Fork this project on Github, then when you are done, please send us a link to the branch on your fork (for example https://github.com/xxxUSERNAMExxx/wordpress-test/tree/test-work). Please do not PR it back to the project, unless you want other people to see your attempt at the test...!

### Project Structure

For the sake of the test, everything will be done in the theme.

- The main thing to know is that the theme is located in `web/app/themes/sage`.
- The templates are all in `web/app/themes/sage/resources/views/`. They follow the wordpress naming conventions, but they have .blade.php at the end (which allows [blade templates](https://laravel.com/docs/5.8/blade) - again, blade templates are not a part of this test).
- Sass files are located in `web/app/themes/sage/resources/views/` and are set up to use [Tailwind](https://tailwindcss.com/docs/what-is-tailwind/). For any styling in this test, you can use either Tailwind or your own CSS.

### Setup

- Ensure you have composer set up. Run `composer install` in the root project directory, and in the sage theme directory.
- Ensure you have yarn installed. Run `yarn && yarn build` in the sage theme directory to build all the assets. You can run `yarn start` to watch the asset files and rebuild when any changes are saved.
- Run `cp .env.example .env`, then edit `.env` with your local database and local URL details. Do not commit this file.
- You should be able to set up the WordPress site as normal now.

### The Challenge:

- [ ] Add a new post type for "Recipes".
- [ ] Link to the recpies index page from the Home Page template.
- [ ] Show the latest three Recipes on the Home Page, or show a message if there are no recipes (the empty state).
- [ ] Allow people to post comments on the recipes.
- [ ] Additionally, show the three most-commented-on recipes on the Home Page.
- [ ] Show the text "There are x recipes on the site" (where x is the number of published recipes)
- [ ] Show the text "There are x recipes on the site with comments on" (where x is the number of published recipes with comments on)

**PLEASE READ THIS**: Unless you really want to, please do not spend more than an hour on this - the goal is not to complete it, it is to get an idea as to how you approach problems, and structure your code.
