# WP Pokemon Photodex
The WP Pokemon Photodex plugin creates an easy way for you to share your photos of Pokemon in the wild of Pokemon Go. Mimicing the in game pokedex the photodex organizes the pokemon by pokedex number and shows your entire collection or one of your choosing.  

# Features

1) Print the full photodex
2) Print a single pokemon based on post id
3) Print a random single pokemon

# Admin

The WP Pokemon Photodex plugin adds a tab to the admin for the Photodex post class.

You can add new posts for each pokemon that you snap a picture of. For each post you select which pokemon from the Pokedex the post is for and select a featured image.

When you load the Photodex section the default sort is by post date. You can also sort by pokemon name, or pokedex number. 

# Usage

Using the shortcode **[photodex]** on a page will print out the full photodex. The photodex creates a similar look to pokedex from Pokemon Go. It shows all of the pokemon up to the highest number that you have created a post for. Any blanks in between use a blank square with the pokedex number for that pokemon.

Using a post_id attribute will print out only that pokemon. **[photodex post_id="#"]**

You can also print out one random pokemon by setting the random attribute to true. **[photodex random="true"]**

