<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //r1
        Recipe::create([
            'name' => "Pan-Fried Tilapia",
            'image' => "recipe-yNcQSIW0y3VjHGW0V2aW.jpg",
            'preparation_time' => 7,
            'cooking_time' => 23,
            'description' => "Tilapia can get a bad wrap. It's not tender and fatty like salmon, nor is it firm and flavorful like tuna. It's sort of an in-between fish, and can often be written off as boring. No more! We're here to vouch for tilapia; it has so much to offer! It's lean and inexpensive, making it a great choice for your next weeknight dinner. Follow a few simple rules and take this affordable filet from zero to hero.",
            'preparation_instructions' => "Step 1: In a large bowl, whisk together flour, garlic powder, onion powder, chili powder, and cumin. Whisk to combine. Step 2: Season tilapia filets generously with salt and pepper, then dip each in flour mixture, shaking off any excess flour. Place on a clean plate or baking sheet. Step 3: In a large, nonstick skillet over medium heat, heat oil. Add 2 filets and cook 3 to 4 minutes per side, until crust is golden and fish flakes easily with a fork. Repeat with remaining filets. Step 4: Serve immediately with cilantro and lime wedges.",
            'portions' => 4,
            'total_time' => 30,
            'levels_id' => 3,
        ]);
        //r2
        Recipe::create([
            'name' => "Skillet Lemon-Herb Chicken and Potatoes",
            'image' => "recipe-jgwDAcGxfmCQvIfI3hDK.jpg",
            'preparation_time' => 7,
            'cooking_time' => 24,
            'description' => "It's one of our favorite tricks at Delish: cooking all components of a dish protein, carbs, vegetables in a single skillet. Quick-cooking boneless skinless chicken breasts stay moist and tender thanks to pan-roasting and a tangy lemon-butter sauce. If you can't find small potatoes, feel free to cut up larger ones to about 1-inch pieces.",
            'preparation_instructions' => "Step 1: Preheat oven to 425°F. Pat chicken dry and season with salt and pepper. In a large high-sided skillet over medium-high heat, heat 1 tablespoon oil. Add chicken and cook until golden, 4 minutes. Flip and cook 2 minutes more, then transfer to a plate., Step 2: Reduce heat to medium. Add butter to skillet, swirling to melt. Add garlic and cook, stirring, 1 minute. Stir in lemon juice and remove skillet from heat. Pour butter mixture into a heatproof bowl and add thyme leaves, rosemary, and oregano. Season with salt and pepper. Step 3: Add potatoes and remaining 2 tablespoons oil to skillet. Season with salt and pepper and toss to coat. Transfer skillet to the oven and roast, stirring halfway through, until lightly golden, 30 minutes. Step 4: Give potatoes a stir and arrange lemon slices, thyme sprigs, and chicken on top. Return to oven and roast until chicken is cooked through and potatoes are tender, 15 minutes. Step 5: Serve with butter sauce drizzled over chicken and potatoes. Sprinkle with parsley.",
            'portions' => 4,
            'total_time' => 31,
            'levels_id' => 3,
        ]);
        //r3
        Recipe::create([
            'name' => "Slow-Cooker Chicken Thighs",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 1,
            'cooking_time' => 32,
            'description' => "We in the Delish Test Kitchen will always be the first to say that chicken thighs are FAR superior to chicken breasts. Both in flavor and tenderness thighs have breasts beat, and often times they can even be cheaper! And for those that may have some trepidation about entering into the world of cooking with dark meat, this recipe is just for you!",
            'preparation_instructions' => "Step 1: In a large skillet over medium-high heat, heat oil. Season chicken thighs with salt and pepper and sear until golden, 3 minutes per side. Transfer to slow cooker. Step 2: In a small bowl, whisk together soy sauce, ketchup, honey, garlic, ginger, Sriracha, and lime juice. Pour sauce over chicken and toss until coated. Step 3: Cover and cook on low for 5 to 6 hours, or on high for 2 hours, until no longer pink. Step 4: Serve over rice.",
            'portions' => 1,
            'total_time' => 33,
            'levels_id' => 2,
        ]);
        //r4
        Recipe::create([
            'name' => " Air Fryer Chimichanga ",
            'image' => "recipe-45Hy68Pa7DV3wCyUrU3w.jpg",
            'preparation_time' => 10,
            'cooking_time' => 22,
            'description' => "Chimichangas are essentially fried burritos, which, don't get us wrong, we absolutely love. Sometimes we don't love the excess oil or simply the act of deep frying. It's messy. Make your chicken chimichangas in the air fryer instead for an exceptionally crispy burrito.",
            'preparation_instructions' => "Step 1: In a medium skillet over medium heat, heat oil. Cook onion, stirring occasionally, until softened, about 5 minutes. Add garlic, chili powder, cumin, and garlic powder. Cook, stirring, until fragrant, about 1 minute. Add salsa and bring to a simmer, then add chicken and toss to coat; season with salt and black pepper. Remove from heat. Step 2: Spread about 1/4 cup beans in center of tortillas, then sprinkle with both cheeses. Top with about 1/2 c. chicken mixture and sour cream. Roll into a burrito by folding top and bottom of tortilla into center, then fold right side over filling, tucking and tightly rolling to seal. Transfer to a plate seam side down. Step 3: Working in batches, in an air-fryer basket, arrange burritos seam side down; spray with cooking spray. Cook at 400° for 5 minutes, then turn, spray with more cooking spray, and cook 5 minutes more. Step 4: Divide chimichangas among plates. Drizzle with hot sauce and sour cream. Serve with guacamole alongside.",
            'portions' => 7,
            'total_time' => 33,
            'levels_id' => 2,
        ]);
        //r5
        Recipe::create([
            'name' => " Shrimp & Snow Pea Stir Fry",
            'image' => "recipe-xpyJb9cYP4JFBL4NH5JG.jpg",
            'preparation_time' => 5,
            'cooking_time' => 21,
            'description' => "This dinner is the perfect fix for a busy week night. Only 5 ingredients and 1 skillet and you're on your way!",
            'preparation_instructions' => "Step 1: Bring 3-4 quarts of water to a boil and remove from heat. Place rice linguine noodles in a large metal or glass bowl and cover in hot water for 25 minutes, stirring with a fork frequently to break up any noodle clumps. After about 15 minutes water should be cool enough to pull out and separate any clumped noodles. Step 2: Rinse shrimp and place on a paper towel lined plate. Pat dry and season with salt and pepper on both sides. Add shrimp and 1 tablespoon sweet chili sauce to a container with a lid. Refrigerate for at least 15 minutes and up to overnight. Step 3: Drain and rinse noodles and return to the bowl. Gather your ingredients (noodles, shrimp, remaining 1/4 cup sweet chili sauce, and snow peas) in bowls and place on a sheet tray next to the stove. Step 4: Heat a large skillet or wok over high heat. Add 1 tablespoon oil and swirl in pan to coat. When you see the first wisp of smoke, add shrimp and cook until they begin to turn pink, 1 minute each side. The sugars in the sweet chili sauce should caramelize just a little bit and create tasty bits in the pan. Step 5: Make space in the middle of the pan, add remaining 1 tablespoon oil and sliced snow peas and cook 2 minutes. Add prepared noodles and ¼ cup of sweet chili sauce. Continue to cook until noodles are coated and heated through, about 4 to 6 minutes. Serve immediately.,",
            'portions' => 8,
            'total_time' => 26,
            'levels_id' => 2,
        ]);
        //r6
        Recipe::create([
            'name' => "Tex-Mex Meatballs",
            'image' => "recipe-am4s2nxyAVYea4EmaQDr.jpg",
            'preparation_time' => 2,
            'cooking_time' => 14,
            'description' => "Pro tip: These meatballs make a killer sub. Throw them on a hero roll with extra sauce and melt some cheddar on top.",
            'preparation_instructions' => "Step 1: Preheat oven to 425°. Using a spatula, spread 2 tablespoons butter on the bottom of a large rimmed baking sheet. Add potatoes, season with salt and pepper, and toss to coat. Roast until they just start to turn golden, about 15 minutes. Step 2: Meanwhile, in a medium bowl, stir together remaining 6 tablespoons butter, lemon zest, 3 teaspoons thyme, and 1 teaspoon oregano. Step 3: Pat chicken thighs dry with paper towels and season with salt and pepper. Rub butter mixture all over chicken, including under the skin. Sprinkle with remaining 1 teaspoon thyme and1/2 teaspoon oregano. Step 4: Add onion, lemon slices, and garlic to baking sheet and toss with potatoes. Nestle chicken thighs among potato mixture. Roast until golden and chicken reaches an internal temperature of 165°, about 35 minutes.,",
            'portions' => 10,
            'total_time' => 16,
            'levels_id' => 3,
        ]);
        //r7
        Recipe::create([ 	
            'name' => " Sheet-Pan Lemon Butter Chicken Thighs ", 	
            'image' => "recipe-EVfydIyp2jlbpojlSLDW.jpg", 	
            'preparation_time' => 3, 	
            'cooking_time' => 24 - 3, 	
            'description' => "Butter makes everything better especially when it's mixed with lemon zest, thyme, and oregano, then slathered on baked chicken.", 	
            'preparation_instructions' => "Step 1: Preheat oven to 425°. Using a spatula, spread 2 tablespoons butter on the bottom of a large rimmed baking sheet. Add potatoes, season with salt and pepper, and toss to coat. Roast until they just start to turn golden, about 15 minutes. Step 2: Meanwhile, in a medium bowl, stir together remaining 6 tablespoons butter, lemon zest, 3 teaspoons thyme, and 1 teaspoon oregano. Step 3: Pat chicken thighs dry with paper towels and season with salt and pepper. Rub butter mixture all over chicken, including under the skin. Sprinkle with remaining 1 teaspoon thyme and1/2 teaspoon oregano. Step 4: Add onion, lemon slices, and garlic to baking sheet and toss with potatoes. Nestle chicken thighs among potato mixture. Roast until golden and chicken reaches an internal temperature of 165°, about 35 minutes.", 	
            'portions' => 6, 	
            'total_time' => 24, 	
            'levels_id' => 3, 
            ]); 
        //r8
        Recipe::create([ 	
            'name' => " BBQ Chicken Twice-Baked Potatoes ", 	
            'image' => "recipe-placeholder.png", 	
            'preparation_time' => 7, 	
            'cooking_time' => 27 - 7, 	
            'description' => "These twice-baked potatoes are loaded with the makings of a full chicken dinner.", 	
            'preparation_instructions' => "Step 1: Preheat oven to 375°. Place sweet potatoes on a large baking sheet. Toss with oil and season with salt and pepper. Step 2: Bake until tender, about 1 hour, depending on size. Let cool slightly, then, using a paring knife, slice along top of each sweet potato and push in both ends to create a well. Step 3: In a medium bowl, toss chicken with barbecue sauce and garlic. Stuff into sweet potatoes, then top with red onion, jalapenÌƒo, and Gouda. Return to oven and bake until cheese is melty and chicken is warmed through, about 15 minutes more. Step 4: Drizzle with barbecue sauce before serving.", 	
            'portions' => 2, 	
            'total_time' => 27, 	
            'levels_id' => 3, 
            ]); 
        //r9
        Recipe::create([ 	
            'name' => "Easy Pad Thai", 	
            'image' => "recipe-placeholder.png", 	
            'preparation_time' => 2, 	
            'cooking_time' => 15 - 2, 	
            'description' => "This amazing Pad Thai recipe is easy and comes together in under 30 minutes. It starts with fresh ingredients including rice noodles, chicken, shrimp, tofu, peanuts, scrambled eggs, and fresh vegetables all tossed together in a delicious homemade pad thai sauce.", 	
            'preparation_instructions' => "Step 1: In a large pot of salted boiling water, cook noodles until al dente. Drain. Step 2: In a small bowl, whisk together lime juice, brown sugar, fish sauce, soy sauce, and cayenne pepper. Set aside. Step 3: In a large nonstick pan over medium-high heat, heat oil. Add bell pepper and cook until tender, about 4 minutes. Stir in garlic and cook until fragrant, about 1 minute more. Add the shrimp and season with salt and pepper. Cook until pink, about 2 minutes per side. Step 4: Push the shrimp and vegetables to one side of the pan and pour in the egg. Scramble until just set then mix with the shrimp mixture. Add the cooked noodles and toss until combined. Pour in the lime juice mixture and toss until the noodles are coated. Step 5: Garnish with green onions and roasted peanuts before serving.", 	
            'portions' => 8, 	
            'total_time' => 15, 	
            'levels_id' => 2, 
            ]);
        //r10
        Recipe::create([
            'name' => "Tuscan Butter Gnocchi",
            'image' => "recipe-3XM24ICSbVQUJzYtit1s.jpg",
            'preparation_time' => 8,
            'cooking_time' => 27,
            'description' => "Tuscan Butter is perfect on everything. Literally. We love it on shrimp, salmon, chicken, and now gnocchi.",
            'preparation_instructions' => "Step 1: Preheat oven to 350. In a large skillet over medium heat, melt butter. Add garlic and cook until fragrant, 1 minute. Add cherry tomatoes and season with oregano, salt, pepper, and a pinch of red pepper flakes. Cook until tomatoes are beginning to burst then add spinach and cook until beginning to wilt. Step 2: Stir in broth, heavy cream, Parmesan, and herbs and bring to a simmer. Reduce heat to low and simmer until sauce is slightly reduced, about 3 minutes. Step 3: Add gnocchi and toss to coat. Pour gnocchi into a baking pan and top with mozzarella. Bake until gnocchi is cooked through and cheese is melty, 30 minutes. Step 4: Garnish with more herbs and squeeze lemon on top before serving.",
            'portions' => 9,
            'total_time' => 35,
            'levels_id' => 1,
        ]);
        //r11
        Recipe::create([
            'name' => "Beef and broccoli",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 1,
            'cooking_time' => 26,
            'description' => "A classic Chinese-American menu item, beef and broccoli is a dish that I am particularly obsessed with. The sauce in this version uses ingredients that I always have on hand in my kitchen - garlic, broth, soy sauce, lime juice, and Sriracha. While not traditional, this recipe hits the spot. If you're looking to dive deeper into beef and broccoli, our Senior Food Producer, June Xie, says hoisin, a fermented bean paste, is an essential addition for that trademark Chinese-American flavor. ( Her Beef Broccoli Stir-Fry is absolutely incredible and you should 100% try it.) Curious to learn more or eager to make substitutions? Read on for tips for getting perfect results every time.",
            'preparation_instructions' => "Step 1: In a medium bowl, whisk 1/3 cup soy sauce, lime juice, 1 tablespoon brown sugar, and 1 tablespoon cornstarch until combined. Add steak, season with salt and pepper, and toss until steak is coated. Marinate 20 minutes. Step 2: In a large skillet over medium-high heat, heat oil. Add steak in a single layer, working in batches if needed, and cook until seared, about 2 minutes per side. Remove steak and set aside. Step 3: Stir in garlic and cook until fragrant, about 1 minute. Stir in remaining 1 tablespoon cornstarch until garlic is coated, then stir in broth, remaining 2 tablespoons brown sugar, remaining 1/3 cup soy sauce, and Sriracha. Bring mixture to a simmer. Add broccoli and simmer until tender, about 5 minutes. Season sauce with salt and pepper (if necessary), then return steak to skillet. Step 4: Garnish with sesame seeds and green onions before serving.",
            'portions' => 6,
            'total_time' => 27,
            'levels_id' => 3,
        ]);
        //r12
        Recipe::create([
            'name' => "Saucy Tuscan Butter Shrimp ",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 6,
            'cooking_time' => 23,
            'description' => "Is there anything authentically Italian about this recipe? Nope. Is it delicious? 100%. In fact, this sauce is so good, you'll be tempted to eat it straight out of the pan. (And we wouldn't blame you!)",
            'preparation_instructions' => "Step 1: In a large skillet over medium-high heat, heat oil. Season shrimp all over with salt and pepper. When oil is shimmering but not smoking, add shrimp and sear until underside is golden, about 2 minutes, then flip until opaque. Remove from skillet and set aside. Step 2: Reduce heat to medium and add butter. When butter has melted, stir in garlic and cook until fragrant, about 1 minute. Add cherry tomatoes and season with salt and pepper. Cook until tomatoes are beginning to burst then add spinach and cook until spinach is beginning to wilt. Step 3: Stir in heavy cream, Parmesan and basil and bring mixture to a simmer. Reduce heat to low and simmer until sauce is slightly reduced, about 3 minutes. Step 4: Return shrimp to skillet and stir to combine. Cook until shrimp is heated through, garnish with more basil and squeeze lemon on top before serving.",
            'portions' => 5,
            'total_time' => 29,
            'levels_id' => 2,
        ]);
        //r13
        Recipe::create([
            'name' => "Vegan Lasagna",
            'image' => "recipe-0uONJxbnasG0w4QDbMXw.jpg",
            'preparation_time' => 2,
            'cooking_time' => 32,
            'description' => "A lasagna you can feel good about.",
            'preparation_instructions' => "Step 1: Preheat oven to 350º. Bring a large pot of salted boiling water to a boil and cook lasagna noodles until al dente drain. Step 2: Wrap tofu in a clean kitchen cloth or paper towels and place on a large plate.Place a pan or heavy plate on top of tofu in order to press out as much liquid as possible. Let sit for at least 30 minutes. When drained, crumble with two forks and season with salt and pepper. Set aside. Step 3: In a large skillet over medium heat, heat oil. Add onion and garlic and season with salt, pepper, and 1 tsp oregano. Add mushrooms and cook until softened, 3 to 4 minutes. Stir in thawed and drained spinach until completely combined. Remove from heat and set aside vegetables. Step 4: Wipe out skillet and return to medium heat to make white sauce: Add olive oil and heat until shimmering but not smoking. Add flour and whisk to combine. Cook until lightly golden and nutty, 1 to 2 minutes. Whisk in nut milk until smooth. Stir in nutritional yeast and garlic powder and season with salt and pepper. Bring to a simmer and let cook until thickened, 8 to 10 minutes. Step 5: Build lasagna: In a large baking dish, spoon 1/4 c marinara into an even layer, then add a layer of noodles. Top with an even layer of vegetable mixture, tofu, marinara, and white sauce. Repeat until all ingredients are used, ending in marinara. Add a single layer of tomato rounds and season with salt, pepper and remaining oregano. Step 6: Bake 35 to 40 minutes, until tomatoes are cooked and lasagna is heated through. Remove from oven and let cool slightly. Garnish with basil and serve.",
            'portions' => 7,
            'total_time' => 34,
            'levels_id' => 3,
        ]);
        //r14
        Recipe::create([
            'name' => "One-Pan Creamy Chicken & Gnocchi",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 1,
            'cooking_time' => 30,
            'description' => "When everything cooks together everyone wins. The chicken will finish cooking in the sauce making it the easiest and most comforting meal. It's what weeknight dinner dreams are made of!",
            'preparation_instructions' => "Step 1: Season chicken on both sides with salt and pepper. In a large skillet over medium-high heat, heat 1 tablespoon oil. Add chicken and cook until golden, 4 minutes per side. Remove from skillet. Step 2: Reduce heat to medium and add remaining 1 tablespoon oil. Add shallot and mushrooms and cook until golden, 5 minutes. Add garlic, thyme, and oregano and cook until fragrant, 1 minute more. Add broth and scrape up any brown bits on bottom of pan, then slowly add in half and half. Bring to a simmer and season with salt, pepper and a pinch of red pepper flakes. Stir in gnocchi and return chicken to pan. Let simmer until chicken is cooked through internal temperature reaches 165, 8 to 10 minutes, stirring occasionally. Remove chicken from skillet. Step 3: Add cheeses and stir until melted, then add spinach and stir until wilted. Step 4: Slice chicken and return to skillet. Season with more salt and pepper to taste.",
            'portions' => 7,
            'total_time' => 31,
            'levels_id' => 1,
        ]);
        //r15
        Recipe::create([
            'name' => "Hawaiian Garlic Shrimp",
            'image' => "recipe-BRyEX1APPstco3uqVjuJ.jpg",
            'preparation_time' => 1,
            'cooking_time' => 28,
            'description' => "This garlic lovers spin on scampi was made famous by Giovanni Shrimp Truck on Oahu. Tossing the shrimp in rice flour helps them take on a delicately crunchy texture, but all-purpose flour will work in a pinch.",
            'preparation_instructions' => "Step 1: If using shell-on shrimp: Use a pair of kitchen shears to cut lengthwise about halfway into the shrimp, without cutting through the tail. (The shell will still be on the shrimp, but the vein will be exposed.) Devein, pat dry, and place in a large bowl. Step 2: Toss shrimp with 2 teaspoons oil and season with salt, pepper, paprika, and cayenne. Marinate in the refrigerator, 20 minutes. Step 3: Sprinkle shrimp with rice flour and toss until fully coated. Step 4: In a large skillet over medium-high heat, heat remaining 1/4 cup oil until shimmering. Add shrimp in a single layer (working in batches if necessary) and fry until shrimp are pink and rice flour is golden, 2 to 3 minutes per side. Transfer to a paper towel-lined plate. Step 5: Remove oil from skillet and wipe clean. Melt butter over medium heat until it begins to foam, then add garlic. Cook, stirring constantly, until fragrant and golden, 2 to 3 minutes. Add shrimp and toss until fully coated. Step 6: Serve over rice with lemon wedges. Spoon over remaining garlic butter.",
            'portions' => 4,
            'total_time' => 29,
            'levels_id' => 3,
        ]);
        //r16
        Recipe::create([
            'name' => "Arroz Con Pollo",
            'image' => "recipe-8ZBudtugiDKf2lJs8IAM.jpg",
            'preparation_time' => 10,
            'cooking_time' => 18,
            'description' => "It's Wednesday and you want something extremely good for dinner, but you also don't want to spend your entire evening cooking and cleaning. We hear you and that's exactly why Arroz con Pollo is the perfect weeknight dinner and leftovers make fantastic lunches. It's an easy one pot meal that doesn't taste like one. The rice is so flavorful you'll be eating it straight out of pan and we won't blame you. If you'd rather use all chicken thighs instead of drumsticks go ahead and swap them out!",
            'preparation_instructions' => "Step 1: Pat chicken dry with paper towels, then season all over with salt and pepper. In a small bowl, combine cumin, oregano, garlic powder, and cayenne. Rub mixture into chicken. Step 2: In a large skillet over medium-high heat, heat oil. Add chicken and cook until golden, 5 minutes per side. Remove skillet and reserve on a plate. Step 3: To same skillet over medium heat, add onion and pepper. Cook until soft, 5 minutes. Add garlic and cook until fragrant, 1 minute more, then stir in tomato paste. Step 4: Add rice and cook until well coated and toasted, 3 minutes. Pour in chicken broth and diced tomatoes, and bay leaf, stirring up any bits from bottom of pan. Bring to a boil, then add chicken back to skillet. Reduce heat and let simmer, covered, until chicken is cooked through and rice is tender, 30 minutes. Stir occasionally to make sure rice is not sticking to bottom of pan. Add more water or broth as necessary. Step 5: Remove bay leaf and serve with cilantro.",
            'portions' => 9,
            'total_time' => 28,
            'levels_id' => 3,
        ]);
        //r17   
        Recipe::create([
            'name' => "Copycat Chicken Lettuce Wraps",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 2,
            'cooking_time' => 13,
            'description' => "This recipe was inspired by the staple appetizer at P.F. Chang's restaurant, which has been on the menu since day one in 1993 they've never revealed the recipe. Cofounder Philip Chiang was inspired by the cult-favorite lettuce wraps his mother, Cecilia, served at her upscale restaurant The Mandarin in San Francisco (she's credited with popularizing Chinese food in America in the '60s). He swapped out squab for chicken in the now iconic version we replicated.",
            'preparation_instructions' => "Step 1: Make the sauce: In a small bowl, whisk together hoisin sauce, soy sauce, rice wine vinegar, Sriracha, and sesame oil. Step 2: In a large skillet over medium-high heat, heat olive oil. Add onions and cook until soft, 5 minutes, then stir in garlic and ginger and cook until fragrant, 1 minute more. Add ground chicken and cook until opaque and mostly cooked through, breaking up meat with a wooden spoon. Step 3: Pour in sauce and cook 1 to 2 minutes more, until sauce reduces slightly and chicken is cooked through completely. Turn off heat and stir in chestnuts and green onions. Season with salt and pepper. Step 4: Spoon rice, if using, and a large scoop (about 1/4 cup) of chicken mixture into center of each lettuce leaf. Serve immediately.",
            'portions' => 9,
            'total_time' => 15,
            'levels_id' => 3,
        ]);
        //r18
        Recipe::create([
            'name' => "Coconut Curry Salmon",
            'image' => "recipe-hRAquZCTwhxhgghoIqmm.jpg",
            'preparation_time' => 1,
            'cooking_time' => 16,
            'description' => "This salmon dish can be as spicy as you like it. Just remember that the coconut milk will tone down a lot of the heat so even if you feel like the called for amount will be too much, it might not be. The coconut milk and spice go so well together, making a rich, but not heavy, sauce that really tastes and feels far more complicated than it is. The salmon simmers in the milk keeping it very tender and flaky and of course imparting a lot of flavor onto it. Spoon the sauce over the salmon a few times as it cooks to give it a nice coating and don't forget to stir the sauce every once in awhile so nothing starts to scald.",
            'preparation_instructions' => "Step 1: Season salmon with salt and pepper. In a large skillet over medium heat, heat oil. Add salmon, skin side down and cook until golden, about 5 minutes per side. Remove from skillet and place on a plate. Step 2: Return skillet over medium heat and add shallots. Cook until golden and soft, 3 minutes. Add curry paste, garlic, and ginger and cook until paste is darkened and fragrant, 1 minute. Reduce heat slightly and slowly whisk in coconut milk, then add sriracha and fish sauce and bring to a simmer. Return salmon to skillet and let simmer until flakes easily with a fork and internal temperature reaches 145°, about 15 minutes depending on thickness of salmon. Spoon sauce over salmon and stir sauce occasionally. Add more sriracha or fish sauce to taste.  Step 3: Spoon sauce over salmon and serve with rice, limes, and topped with cilantro.",
            'portions' => 4,
            'total_time' => 17,
            'levels_id' => 2,
        ]);
        //r19
        Recipe::create([
            'name' => "Instant Pot Chicken Noodle Soup",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 7,
            'cooking_time' => 6,
            'description' => "Is there anything more comforting than a bowl of chicken noodle soup? We'll answer for you: NO! This Instant Pot recipe makes light work of this homestyle classic. This is definitely one of those set it and forget it recipes that you're going to keep in your back pocket. Using the saute feature, you can easily develop flavors by cooking the mirepoix (that's onions, carrots, and celery) before adding the remaining ingredients.",
            'preparation_instructions' => "Step 1: Turn Instant Pot to Saute setting. Heat oil, then add onion, carrots, and celery. Cook, stirring occasionally, until vegetables are slightly tender, 6 to 8 minutes. Add garlic and thyme and cook until fragrant, 1 minute. Add bay leaves if using, then add chicken breasts and season generously with salt and pepper. Add broth and water and close lid. Set Instant Pot to Soup setting and set timer for 7 minutes. Step 2: When cooking is complete and air has been naturally released from Instant Pot, carefully remove lid and use tongs to remove chicken breasts onto a plate or cutting board. Using two forks, shred chicken, then return chicken to pot. Remove bay leaves and add egg noodles. Return Instant Pot to Saute setting and cook, uncovered, until noodles are cooked through, 4 to 6 minutes. Step 3: Turn off Instant Pot and stir in pepper flakes and lemon juice if using. Ladle into bowls and top with parsley and more black pepper before serving.",
            'portions' => 6,
            'total_time' => 13,
            'levels_id' => 2,
        ]);
        //r20
        Recipe::create([
            'name' => "Lemon Pepper Chicken",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 9,
            'cooking_time' => 18,
            'description' => "Chicken breast recipes have a bad rep for being bland. If you throw chicken into a pan with salt and pepper and bake it for forever, of course it's going to be terrible. I know this sounds obvious, but it's what so many people trying to 'eat healthy' do. On the other hand, when you add layers of bright and fresh flavors (like lemon pepper!), eating healthy can be extremely easy and delicious.",
            'preparation_instructions' => "Step 1: Preheat oven to 400°. In a medium bowl, whisk together flour, lemon pepper, salt, and zest of 1 lemon. Toss chicken breasts in the flour mixture until fully coated. Slice remaining lemon into thin rounds. Step 2: In a large ovenproof skillet over medium-high heat, heat oil. Add chicken in a single layer and cook until golden on bottom, about 5 minutes, then flip chicken breasts. Step 3: To skillet, add broth, butter, garlic, and lemon slices and bake until chicken is cooked through and sauce has reduced slightly, about 5 minutes. Step 4: Spoon sauce on top of chicken and garnish with parsley.",
            'portions' => 8,
            'total_time' => 27,
            'levels_id' => 1,
        ]);
        //r21
        Recipe::create([
            'name' => "Italian Sausage &amp; Pepper Frittata Affogato",
            'image' => "recipe-ztdOgdJtQs5uK2zwpHMg.jpg",
            'preparation_time' => 3,
            'cooking_time' => 10,
            'description' => "Breakfast meets dinner in this marinara- and mozzarella-topped Italian sausage and pepper frittata affogato. Fittingly, the Italian word 'affogato' means drowned, which explains the marinara topping. It lends this dish a vibe somewhere between a breakfast frittata and pizza, meaning it's enjoyable for pretty much any meal of the day. Follow it up with an affogato the Italian dessert featuring gelato doused in espresso.",
            'preparation_instructions' => "Step 1: Preheat broiler to high. In a medium bowl, whisk eggs, basil, milk, salt, and pepper. Step 2: In a ovenproof nonstick skillet over medium-high, heat oil. Add bell pepper and onion and cook, stirring occasionally, until just tender, about 3 minutes. Push vegetables to one side of skillet and add sausage to the other side. Using a wooden spoon, break up sausage into small bits, then stir to combine with vegetables and cook, stirring occasionally, until sausage is golden brown and cooked through and vegetables are tender, 4 to 6 minutes. Step 3: Pour egg mixture into skillet with sausage and vegetables. Cook, slowly stirring with a spatula and scraping bottom and sides of skillet to form large curds, until eggs are almost set, 2 to 3 minutes. Spread into an even layer. Step 4: Transfer skillet to oven and broil until golden in spots and puffed, about 3 minutes. Remove from oven. Spread marinara over and sprinkle with mozzarella. Continue to broil until sauce is warm and cheese is melted and bubbly, 3 to 5 minutes more. Let cool about 5 minutes before serving. Sprinkle with basil.",
            'portions' => 3,
            'total_time' => 13,
            'levels_id' => 2,
        ]);
        //r22
        Recipe::create([
            'name' => "Apple Cider Glazed Chicken",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 9,
            'cooking_time' => 6,
            'description' => "Don't let chicken breasts have all the fun! Chicken thighs are super flavorful, easy to cook, and SO delicious with sweet potatoes and apples. Try it for dinner tonight.",
            'preparation_instructions' => "Step 1: Preheat oven to 425. In a medium bowl, add potatoes, apples and chopped rosemary and season with salt and pepper. Drizzle with 1 tablespoon olive oil and toss until combined. Step 2: In a large ovenproof skillet over medium-high heat, heat remaining olive oil. Add chicken and sear, skin side down, until golden, about 2 minutes. Remove chicken from heat while you make the glaze. Step 3: To the same skillet, add apple cider, honey and grainy mustard. Bring mixture to a rapid simmer and cook until mixture has reduced slightly then whisk in the butter. Return the chicken to the skillet, skin side up, and scatter the sweet potato mixture and rosemary sprigs around the chicken. Turn off the heat and transfer the entire skillet to the oven. Step 4: Bake until the sweet potatoes are tender and the chicken is cooked through, about 20 minutes. (If potatoes need longer to cook, transfer chicken to a cutting board to rest and continue cooking until tender.), Step 5: Serve chicken and potatoes with pan drippings.",
            'portions' => 10,
            'total_time' => 15,
            'levels_id' => 1,
        ]);
        //r23
        Recipe::create([
            'name' => "Classic Stuffed Peppers",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 3,
            'cooking_time' => 22,
            'description' => "Of all the food you can stuff, stuffed peppers are at the top of our list. Bell peppers are large enough to hold a lot, strong enough to keep their shape in the oven, and mild enough in flavor to go with just about anything. In other words, they're the perfect vessel to hold a variety of different ingredients and fillings.",
            'preparation_instructions' => "Step 1: Preheat oven to 400. In a small saucepan, prepare rice according to package instructions. In a large skillet over medium heat, heat oil. Cook onion until soft, about 5 minutes. Stir in tomato paste and garlic and cook until fragrant, about 1 minute more. Add ground beef and cook, breaking up meat with a wooden spoon, until no longer pink, 6 minutes. Drain fat. Step 2: Return beef mixture to skillet, then stir in cooked rice and diced tomatoes. Season with oregano, salt, and pepper. Let simmer until liquid has reduced slightly, about 5 minutes. Step 3: Place peppers cut side-up in a baking dish and drizzle with oil. Spoon beef mixture into each pepper and top with Monterey jack, then cover baking dish with foil. Step 4: Bake until peppers are tender, about 35 minutes. Uncover and bake until cheese is bubbly, 10 minutes more. Step 5: Garnish with parsley before serving.",
            'portions' => 7,
            'total_time' => 25,
            'levels_id' => 1,
        ]);
        //r24
        Recipe::create([
            'name' => "Honey Garlic Glazed Salmon",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 10,
            'cooking_time' => 6,
            'description' => "A longtime favorite of Delish readers, this savory-sweet salmon never disappoints. Searing fish might seem intimidating but, once you get the hang of it, it'll be second nature. Just follow these easy tips.",
            'preparation_instructions' => "Step 1: In a medium bowl, whisk together honey, soy sauce, lemon juice and red pepper flakes. Step 2: In a large skillet over medium-high heat, heat two tablespoons oil. When oil is hot but not smoking, add salmon skin-side up and season with salt and pepper. Cook salmon until deeply golden, about 6 minutes, then flip over and add remaining tablespoon of oil. Step 3: Add garlic to the skillet and cook until fragrant, 1 minute. Add the honey mixture and sliced lemons and cook until sauce is reduced by about 1/3. Baste salmon with the sauce. Step 4: Garnish with sliced lemon and serve.",
            'portions' => 8,
            'total_time' => 16,
            'levels_id' => 2,
        ]);
        //r25
        Recipe::create([
            'name' => "Garlicky Spaghetti",
            'image' => "recipe-OAlgXLhqI5f0I8zy0X88.jpg",
            'preparation_time' => 6,
            'cooking_time' => 6,
            'description' => "Anchovies are totally optional in this recipe. The garlic, however, is not! If you're a major garlic fan, you gotta check out our Garlic Butter Meatballs too!",
            'preparation_instructions' => "Step 1: In a large pot of boiling salted water, cook pasta until al dente according to package directions. Reserve 1 cup pasta water before draining. Step 2: Meanwhile, in a large skillet over medium-high heat, heat 3 tablespoons oil. Add minced garlic and bread crumbs and season with red pepper flakes and salt. Cook until bread crumbs are golden and garlic is fragrant, about 3 minutes. Transfer bread crumbs to a paper towel€“lined plate and wipe out skillet. Step 3: Return skillet to medium heat and add remaining 1 tablespoon oil and butter. When butter is melted, add sliced garlic and anchovies, if using. Cook until garlic is fragrant and anchovies are dissolved, about 2 minutes. Step 4: Add pasta to skillet and toss to combine. Stir in lemon zest and juice. And 1/2 cup pasta water and toss, adding more as needed to thicken sauce. Stir in parsley and three-quarters of the bread crumbs and toss to combine. Step 5 Top with remaining bread crumbs before serving.",
            'portions' => 1,
            'total_time' => 16,
            'levels_id' => 3,
        ]);
        //r26
        Recipe::create([
            'name' => "Turkey Casserole",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 10,
            'cooking_time' => 10,
            'description' => "After Thanksgiving is all said and done, we usually end up with way more turkey leftovers than any Thanksgiving sandwich can handle. What better to transform the main bird than adding it to a delicious, comforting casserole? We paired our cooked turkey with veggies, hearty egg noodles, plenty of cheese, and irresistibly buttery, crumbly bread crumbs to top it all off. But, like most casseroles, this turkey version is super customizable €” feel free to add your own touch and make it your own!",
            'preparation_instructions' => 'Step 1: Preheat oven to 425°. In a medium bowl, combine panko with 1/4 cup Parmesan, and 3 tablespoons of butter. Season with salt. Step 2: In a medium saucepan over medium-high heat, melt remaining 3 tablespoons butter. Add onion and mushrooms and season with salt. Cook, stirring until softened, about 6 minutes. Add flour and cook, stirring, 1 minute more. Pour stock into saucepan and bring to a boil. Step 3: Reduce heat to medium-low and simmer, stirring, until thickened, about 5 minutes. Remove from heat and stir in cheddar and remaining1/2 cup Parmesan until melted. Step 4: Add turkey, noodles, peas, parsley, and lemon juice to the saucepan and season with salt and pepper. Step 5 Brush a 9"-x-13" baking dish with butter and scrape turkey casserole mixture into dish. Top with buttered breadcrumbs. Bake until golden and bubbling, about 20 minutes. Step 6: Top with more parsley before serving.',
            'portions' => 4,
            'total_time' => 16,
            'levels_id' => 1,
        ]);
        //r27
        Recipe::create([
            'name' => "Crispy Air Fryer Pork Chops",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 3,
            'cooking_time' => 3,
            'description' => "Most of the time, we don't get very excited over pork chops. Often overdone, they come out dry, sad, and flavorless. Cooking them in an air fryer changes all that. Due to the intense heat circulation that happens, the outside crisps slightly while the inside stays nice and juicy. 20 minutes later most of it hands-off time and it's basically instant dinner. Try it once and let us know down below if you've got a winner on your hands.",
            'preparation_instructions' => "Step 1: Pat pork chops dry with paper towels, then coat both sides with oil. Step 2: In a medium bowl, combine Parmesan, garlic powder, salt, onion powder, paprika, and black pepper. Coat both sides of pork chops with Parmesan mixture, pressing to adhere. Step 3: In an air-fryer basket, arrange pork chops in a single layer. Cook at 375°, flipping halfway through, until an instant-read thermometer inserted into thickest part of pork chop registers 145°, about 9 minutes. Step 4: Let pork chops rest about 10 minutes before serving.",
            'portions' => 1,
            'total_time' => 35,
            'levels_id' => 2,
        ]);
        //r28
        Recipe::create([
            'name' => "Slow-Cooker Chicken Noodle Soup",
            'image' => "recipe-duDsSw9p8vPBlQ1wz5bp.jpg",
            'preparation_time' => 1,
            'cooking_time' => 29,
            'description' => "This slow-cooker supper is well worth the wait.",
            'preparation_instructions' => "Step 1: Season the chicken with 12 tsp each salt and pepper and place on the bottom of a 5- to 6-quart slow cooker. Top with the carrots, celery, garlic, onion and dill. Step 2: Add the chicken broth and cook, covered, until the chicken is cooked through and very tender, 3 to 4 hours on high or 5 to 6 hours on low. Step 3: Remove and discard the large dill stems. Transfer the chicken to a cutting board and let cool for 5 minutes, then cut into pieces. Step 4: While the chicken is cooling, add the noodles to the slow cooker, turn on high and cook, covered, until just tender, 10 to 15 minutes. Stir in the peas and chicken. Serve with more dill, if desired.",
            'portions' => 5,
            'total_time' => 30,
            'levels_id' => 2,
        ]);
        //r29
        Recipe::create([
            'name' => "Shrimp Scampi",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 7,
            'cooking_time' => 8,
            'description' => "Lemon, garlic, and butter makes up what is probably one of the best gastronomic combinations out there (that's right I said it). The almost sweet acidity of the lemon pairs up perfectly with the toasty and pungent flavor of the garlic, and both are enhanced by the rich fattiness of the butter. We have relied on this ingredients for everything from steak to chicken zoodles, but I think no dish lets these flavors shine more than Shrimp Scampi.",
            'preparation_instructions' => "Step 1: In a large bowl toss together shrimp and 2 grated cloves of garlic. Season thoroughly with salt and pepper then chill until ready to use. Step 2: In a small skillet over medium low heat, melt 2 tablespoons of butter until the foam subsides. Add 2 additional cloves of grated garlic and cook, stirring constantly, until fragrant, 2 minutes. Step 3: Stir in bread crumbs and toast, tossing occasionally, until deeply golden brown, 4 to 5 minutes. Season with 1 teaspoon of lemon zest and a heavy pinch of salt. Step 4: In a large skillet over medium heat melt 2 more tablespoons of butter. Working in batches if necessary, add shrimp and cook, tossing occasionally, until just pink all the way through, 2 to 3 minutes. Using a slotted spoon, transfer shrimp to a plate and set aside. Step 5: Increase the heat to medium-high. Add olive oil and heat until shimmering. Add remaining garlic and red pepper flakes and cook, stirring, until garlic has begun to brown, 2 to 3 minutes. Step 6: Add white wine, lemon juice and remaining zest and bring to a simmer. Cook until reduced by about a third, about 3 minutes. Reduce heat to medium low and swirl in the remaining butter, 1 tablespoon at a time, so that the butter emulsifies into the sauce. Let simmer for an additional minute or two until the sauce is thickened and coats the back of a spoon. Add the parsley and stir to combine. Step 7: Return the shrimp and any liquid that has accumulated on the plate to the skillet and toss to coat in the sauce. Cook, stirring occasionally until warmed through, about 2 minutes. Step 8: Top with garlic breadcrumbs and parsley.",
            'portions' => 4,
            'total_time' => 15,
            'levels_id' => 1,
        ]);
        //r30
        Recipe::create([
            'name' => "Slow-Cooker Chicken Pozole",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 4,
            'cooking_time' => 27,
            'description' => "This classic Mexican soup is the definition of hearty. The celebratory dish dates back to pre-Columbian Mesoamerica, and is now popular all over Mexico, as well as New Mexico (where it's known as posole).",
            'preparation_instructions' => "Step 1: Place all ingredients except hominy and garnishes into the slow cooker. Cook on low for 6 to 8 hours, until the chicken is tender and cooked through. Step 2: Take chicken out of slow cooker and shred with two forks. Return to the slow cooker along with the hominy and cook for another 30 minutes. Step 3: Serve soup into bowls and garnish with radish, cabbage and cilantro.",
            'portions' => 4,
            'total_time' => 31,
            'levels_id' => 2,
        ]);
        //r31
        Recipe::create([
            'name' => "Creamy Mushroom Pasta",
            'image' => "recipe-eeu2mPv7XO8BE9BYsn2E.jpg",
            'preparation_time' => 9,
            'cooking_time' => 16,
            'description' => "If a bowl of creamy, earthy, umami-rich pasta sounds good to you, give this flexible recipe a go. It tastes great with any variety of mushrooms and is easily adapted with alternate alliums, herbs, nuts, pasta shapes, and hard cheeses. We love the earthy flavor toasted pecans, but if nuts aren't your bag, toasted fresh breadcrumbs or panko are great crunchy alternatives.",
            'preparation_instructions' => "Step 1: In a large, high-sided skillet, heat oil over medium heat until shimmering. Add pecans and rosemary if using and cook, stirring frequently, until nuts are golden, about 3 minutes. Transfer to a medium heat-proof bowl; toss with lemon zest and a pinch of salt. Step 2: Wipe out skillet, return to heat, and add butter. Once melted, add mushrooms, a large pinch of salt, and a few cranks of black pepper; stir to combine. Cover and let liquid release from mushrooms, about 5 minutes. Uncover and cook, stirring occasionally, until mushrooms are golden all over and no liquid remains, 3-5 minutes more. Step 3: Meanwhile, boil pasta in a large pot of boiling salted water until al dente. Reserve 1 cup pasta water and drain. Step 4: To the skillet with the mushrooms, add shallot and ¼ cup parsley. Cook, stirring until fragrant, 1 to 2 minutes. Step 5: Add white wine and cook until evaporated, 3 to 4 minutes, then add pasta, cream, and 1/2 cup of the pasta water. Cook, tossing frequently, until sauce has thickened slightly, about 3 minutes. Remove from heat and fold in Parmesan, lemon juice, and remaining parsley. Season to taste with salt and pepper. Step 6: Serve topped with fried pecans and more Parmesan.",
            'portions' => 6,
            'total_time' => 25,
            'levels_id' => 2,
        ]);
        //r32
        Recipe::create([
            'name' => "Baked Spaghetti",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 10,
            'cooking_time' => 14,
            'description' => "Why make baked spaghetti instead of regular ol' spaghetti with meat sauce? It's all about that melty layer of cheese on top! If you prefer, slice some fresh mozzarella to finish it off instead.",
            'preparation_instructions' => "Step 1: Preheat oven to 350°. Grease a medium baking dish with cooking spray. Cook spaghetti according to package directions until al dente, drain, and set aside. Step 2: Meanwhile, in a large skillet over medium heat, heat oil. Add onions and cook until soft and translucent, about 5 minutes. Stir in garlic and cook until fragrant, 1 minute more. Add ground beef, season with salt, pepper, and Italian seasoning, and cook until no longer pink, about 8 minutes. Drain fat in a bowl lined with paper towels and return to pan. Pour in crushed tomatoes and basil and simmer until slightly reduced, about 10 minutes. Season with more salt and pepper to taste. Step 3: Toss with spaghetti, then transfer to baking dish and top with mozzarella and Parmesan. Bake until cheese is melted and pasta is warmed through, about 20 minutes. Step 4: Garnish with parsley and serve.",
            'portions' => 8,
            'total_time' => 14,
            'levels_id' => 2,
        ]);
        //r33
        Recipe::create([
            'name' => "Sheet-Pan Chicken Fajitas",
            'image' => "recipe-k93E7qi4cO5TwllRFwMo.jpg",
            'preparation_time' => 6,
            'cooking_time' => 26,
            'description' => "Making a whole recipe on one sheet pan is perfect for meal prepping. For these fajitas you simply toss all of the ingredients€”chicken and vegetables€”in an easy marinade of avocado oil and taco spices like cumin and chili powder and then bake it all together on a sheet pan.",
            'preparation_instructions' => "Step 1: Preheat oven to 425° and grease a large rimmed baking sheet with cooking spray. In a small bowl, whisk together spices. Step 2: In a large bowl, combine chicken, bell peppers, onions, avocado oil, and lime juice. Add spice mix and toss until completely coated. Spread fajita mixture in an even layer onto the prepared baking sheet. Step 3: Bake until chicken is cooked through and no longer pink and vegetables are tender, 20 to 25 minutes. Step 4: Divide mixture among four resealable containers and store in the fridge until ready to eat. Step 5: Serve topped with avocado and tomatoes.",
            'portions' => 2,
            'total_time' => 32,
            'levels_id' => 3,
        ]);
        //r34
        Recipe::create([
            'name' => "Copycat Chipotle Chicken",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 6,
            'cooking_time' => 11,
            'description' => "No matter where you stand on a Chipotle burrito, there's one thing we can all agree on: the chicken is darn good. We love a good copycat recipe and this one is spot on. The chipotle pepper and adobo sauce lends that authentic Chipotle taste we long for.",
            'preparation_instructions' => "Step 1: In a food processor, blend onion, garlic, chipotle pepper and adobo sauce, oil, lime juice, oregano, and cumin until smooth. Season with salt and pepper. Step 2: Add marinade and chicken to a large resealable plastic bag and rub all over to coat chicken. Let marinate in the fridge at least 2 hours. Step 3: Bring chicken to room temperature and preheat grill to high. Remove chicken from marinade and discard marinade. Grill chicken until cooked through and internal temperature reads 165°, about 8 minutes per side. Step 4: Serve chicken over rice with desired toppings.",
            'portions' => 4,
            'total_time' => 17,
            'levels_id' => 1,
        ]);
        //r35
        Recipe::create([
            'name' => "Shredded Chicken Tacos",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 2,
            'cooking_time' => 18,
            'description' => "Shredded chicken tacos are the perfect way to spice up your typical taco night. And it doesn't take all too much more effort! This recipe is inspired by chicken tinga, a Mexican guisado(or stew) that is tender chicken, shredded and added to a tomato sauce spiked with chiles, onion, garlic and spices. This preparation is a little more weeknight friendly by relying on the ever versatile and delicious canned chipotle chiles in adobo.",
            'preparation_instructions' => "Step 1: Into a medium-size pot, add chicken breasts, the halved onion, garlic cloves, bay leaves, black peppercorns, and 2 teaspoons of salt. Cover with water by about 1/2 and bring to a boil. Reduce heat to a simmer, cover, and cook until the internal temperature reaches 165º at the thickest part of the breast, about 10 to 15 minutes. Transfer breasts to a cutting board. Step 2: Add the tomatoes to the simmering cooking liquid. Cook for 2 to 3 minutes, or until the tomatoes have slightly softened and the skin begins to peel away. Transfer the tomatoes to a plate or bowl to cool, then peel them. Drain the cooking liquid, reserving1/2 cup of liquid. Discard peppercorns and bay leaves, but reserve onion halves and garlic cloves. Step 3: Into a blender, add the peeled tomatoes. cooked onion halves, garlic cloves, chipotles, adobo sauce, cumin, oregano, and1/2 cup of the cooking liquid. Blend until smooth, then season with salt and pepper to taste. Step 4: In a large skillet over medium high heat, heat oil until it shimmers. Add sliced onion and cook until slightly softened and beginning to take on some color, 4 to 5 minutes. Step 5: Meanwhile, shred the chicken breasts. Step 6: Into the skillet, carefully pour in the tomato mixture. (There may be some splattering, but the more you stir the less there will be.) Bring the sauce to boil, then reduce to a simmer. Cook until the sauce reduces a bit and thickens slightly, about 5 minutes. Step 7: Add the shredded chicken and stir, breaking up the bigger shreds. Cook for an additional 3 to 4 minutes, or until the chicken has heated through. Occasionally stir to coat chicken in the sauce. Step 8: Spoon chicken onto corn tortillas and top with minced onion, cilantro and avocado. Serve with lime wedges.",
            'portions' => 3,
            'total_time' => 20,
            'levels_id' => 1,
        ]);
        //r36
        Recipe::create([
            'name' => "Creole Jambalaya",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 7,
            'cooking_time' => 22,
            'description' => "Jambalaya is a wildly popular dish that originated in New Orleans and was inspired by flavors from around the world Spanish, West African, and French to name a few. It's spicy, hearty, and incredibly flavorful. And as with most things, the better ingredients, the better the end result will taste.",
            'preparation_instructions' => "Step 1: In a large pot over medium heat, heat oil. Add onion and bell peppers and season with salt and pepper. Cook until soft, about 5 minutes, then stir in chicken and season with salt, pepper, and oregano. Cook until the chicken is golden, about 5 minutes, then stir in andouille sausage, garlic, and tomato paste and cook until fragrant, about 1 minute more. Step 2: Add chicken broth, crushed tomatoes, rice, and Old Bay. Reduce heat to medium low, cover with a tight fitting lid, and cook until the rice is tender and the liquid is almost absorbed, about 20 minutes. Step 3: Add the shrimp and cook until pink, 3 to 5 minutes. Step 4: Stir in green onions just before serving.",
            'portions' => 6,
            'total_time' => 29,
            'levels_id' => 3,
        ]);
        //r37
        Recipe::create([
            'name' => " Crockpot Pepper Steak",
            'image' => "recipe-9gQr1ZhHgdzkbl0Ql3gw.jpg",
            'preparation_time' => 5,
            'cooking_time' => 7,
            'description' => "We in the Delish Test Kitchen absolutely love a good stir fry, both for how creative you can be with them and how quick they can be to make. But sometimes, even stir frying is too much effort and you just want something you can set and forget. Enter this Crock Pot Pepper Steak recipe.",
            'preparation_instructions' => "Step 1: Season flank steak thoroughly with salt and black pepper. In a large Crock Pot combine steak, bell pepper, onions, ginger and garlic. In a mixing bowl or measuring cup combine beef broth, soy sauce, brown sugar, rice wine vinegar and sesame oil. Season to taste with salt and pepper before adding into the Crock Pot. Step 2: Cover and cook on high for 3 1/2 hours to 4 hours or on low for 5 to 6 hours, until the steak is totally tender. Remove the garlic and ginger. Step 3: Optional step: If you desire the sauce to be a bit thicker, in a small bowl combine cornstarch and 1/4 cup of the cooking liquid to create a slurry. Stir the slurry into the Crock Pot, cover and cook on high until thickened, an additional 10 to 15 minutes. Step 4: Serve over rice and garnish with scallion and white sesame seeds.",
            'portions' => 2,
            'total_time' => 12,
            'levels_id' => 2,
        ]);
        //r38
        Recipe::create([
            'name' => " Smoked Salmon Pasta",
            'image' => "recipe-3HNEHv4NNIMo0fOJYKVp.jpg",
            'preparation_time' => 8,
            'cooking_time' => 19,
            'description' => "Smoked salmon pasta sounds really fancy, but the truth is, it's the easiest and fastest pasta we've ever made. It comes together in just under 30 minutes making it the perfect dish to whip up on a weeknight, but still good enough to impress your guests. If you aren't necessarily a fan of smoked salmon our Garlic Butter Salmon would be just as amazing in this pasta!",
            'preparation_instructions' => "Step 1: In a large pot of salted boiling water, cook pasta according to package directions until al dente. Drain, reserving1/2 cup pasta water, and return to pot. Step 2: In a large skillet over medium heat, heat oil. Add onion and cook until soft, 5 minutes, then add garlic and cook until fragrant, 1 minute more. Add wine and cook until almost completely reduced, 5 minutes. Add heavy cream and lemon juice and cook until thickened, another 5 minutes. Season with salt and pepper. Step 3: Add salmon, capers, and dill and cook until salmon is warmed through, 2 minutes, then toss sauce and pasta together. Add 1/4 cup pasta water if sauce is too thick. Garnish with more dill to serve.",
            'portions' => 5,
            'total_time' => 27,
            'levels_id' => 1,
        ]);
        //r39
        Recipe::create([
            'name' => " TikTok Ramen",
            'image' => "recipe-6jkgw8ESON0IUVU25tt5.jpg",
            'preparation_time' => 7,
            'cooking_time' => 13,
            'description' => "This amazing dinner hack brings us back to college. Have fun customizing the noodles with your favorite veggies and toppings. Try using frozen peas or  halved snow peas in place of the bell pepper and carrot. Skip the egg and top with seared chicken or tofu and try the whole thing topped with a smattering of Togarashi or a drizzle of chili crunch. And don't doubt the everything bagel seasoning (either from a shaker or homemade) just do it.",
            'preparation_instructions' => "Step 1: In a medium pot of boiling water, cook the ramen noodles according to package instructions. Drain and set aside. Step 2: Meanwhile, melt the butter in a large nonstick skillet over medium-high. Add the bell pepper and carrot, and cook until, stirring often, until softened, about 4 minutes. Add the garlic and chile flakes, and cook, stirring, until fragrant and golden, about 1 minute. Add the soy sauce and brown sugar and cook, stirring, until sugar is dissolved and sauce is boiling, about 15 seconds.  Step 3: Add the cooked noodles and toss to coat. Push the noodles to one half of the skillet and add the egg to the other half. Season eggs with salt and pepper. Let sit until the very edges look like they are about to set, about 20 seconds. Stir occasionally, using a wooden spoon or spatula until soft curds form, about 3 minutes. Step 4: Combine noodles and eggs and spoon into bowls. Step 5: Sprinkle with everything bagel seasoning and green onion.",
            'portions' => 8,
            'total_time' => 20,
            'levels_id' => 2,
        ]);
        //r40
        Recipe::create([
            'name' => "Creamy Steak Fettuccine",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 5,
            'cooking_time' => 24,
            'description' => "Whenever we crave steak, this dish is always what we want to make. It comes together quickly and is so full of flavor. It makes us forget chicken ever existed. ",
            'preparation_instructions' => "Step 1: In a large pot of boiling salted water, cook pasta until al dente according to package directions. Reserve 1/2 cup pasta water before draining. Return pasta to pot. Step 2: Coat both sides of steak with oil and season generously with salt and pepper. In a large skillet over medium-high heat, cook steak to desired doneness, 4 minutes per side for medium-rare. Transfer to a plate to let rest for 10 minutes. Thinly slice steak. Step 3: In skillet, melt butter over medium heat. Add garlic and cook until softened and fragrant, 1 to 2 minutes. Whisk in flour and cook 1 minute more, then slowly add milk, whisking to break up lumps, and simmer until thickened, 5 minutes. Add Parmesan and parsley and season with salt and pepper. Add tomatoes and cook until bursting, 2 to 3 minutes. Step 4: Add cooked pasta and 1/4 cup reserved pasta water to skillet and toss to combine, adding more pasta water as needed. Add spinach and toss until wilted. Step 5: Top with sliced steak and drizzle with balsamic glaze.",
            'portions' => 4,
            'total_time' => 29,
            'levels_id' => 3,
        ]);

        //r41
        Recipe::create([
            'name' => "Breakfast Tostadas",
            'image' => "recipe-w9pXiEIBbGZGf362s9fS.jpg",
            'preparation_time' => 7,
            'cooking_time' => 22,
            'description' => "I love a simple but crazy delicious breakfast, and these tostadas are just that. I make fresh tostadas from corn tortillas, which always taste better to me and take very little effort, but you can always buy tostadas instead and save yourself a step in the morning. The toppings on these tostadas are my ideal toppings, but you can change them up however you'd like. Cook an overeasy egg instead or top with some sour cream. The best part is that these can be different every time you make them and still be so very good.",
            'preparation_instructions' => "Step 1: Preheat oven to 400°. On a large baking sheet, arrange tortillas in a single layer. Lightly brush both sides with 1 tablespoon oil; season with salt. Bake until golden and crispy, about 15 minutes. Step 2: In a small bowl, mash beans with a fork until mostly smooth but with some chunks remaining. Stir in water. Step 3: Divide beans among tortillas and spread in an even layer. Top with cheese. Continue to bake until cheese is melty, about 5 minutes more. Step 4: In another small bowl, smash avocado until smooth. Stir in lime juice and cilantro; season with salt and pepper. Step 5: In a medium nonstick skillet over medium heat, heat remaining 1 tablespoon oil. Working in batches, crack eggs into pan and cook until whites are set, about 3 minutes; season with salt and pepper. Step 6: Top tortillas with smashed avocado, 1 egg, jalapeños, onions, and salsa.",
            'portions' => 7,
            'total_time' => 29,
            'levels_id' => 1,
        ]);
        //r42
        Recipe::create([
            'name' => "Stuffed Pepper Soup",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 7,
            'cooking_time' => 6,
            'description' => "This soup has everything you like about a classic stuffed pepper ground beef, rice, tomatoes, and CHEESE. Something about sprinkling some cheese (especially if it's white cheddar) over a hot cup of soup, almost brings a tear to your eye! But don't forget this soup is filled with sweet bell peppers, tender beef and hearty rice. It's perfect on its own or served with cornbread or a salad. Switch things up by swapping the rice with a small pasta or other grains like quinoa or farro or use ground chicken or sausage in place of ground beef.",
            'preparation_instructions' => "Step 1: In a large pot over medium heat, heat oil. Add bell peppers and onion and cook until soft, 7 minutes. Add garlic and cook until fragrant, 1 minute. Add ground beef and season with salt and pepper. Cook until no longer pink, 7 minutes. Drain fat and return to heat. Step 2: Add broth, crushed tomatoes, diced tomatoes, and oregano. Bring to a boil then reduce heat to a simmer. Add rice and simmer, covered, until rice is tender, about 40 minutes, adding water if necessary. Season with salt and pepper to taste. Step 3:  Garnish with cheddar and parsley before serving.",
            'portions' => 3,
            'total_time' => 13,
            'levels_id' => 3,
        ]);
        //r43
        Recipe::create([
            'name' => " Garlicky Lemon Baked Tilapia ",
            'image' => "recipe_image",
            'preparation_time' => 10,
            'cooking_time' => 32,
            'description' => "Baked tilapia is a weeknight dinner dream. The fish, which has a very mild taste, is a great way to get eaters who aren't big fans of fish and seafood to love it. It cooks quickly, takes on flavors well, and come out of the oven super tender. This recipe is so simple, we guarantee you'll be in and out of the kitchen in under 30 minutes!",
            'preparation_instructions' => "Step 1: Preheat oven to 400°. Season tilapia with salt and pepper and place on a small baking sheet. Step 2: Mix together butter, garlic, red pepper flakes, lemon juice, and zest then pour over tilapia. Place lemon rounds on top and around tilapia. Step 3: Bake tilapia until fork-tender, 10 to 12 minutes.",
            'portions' => 5,
            'total_time' => 32,
            'levels_id' => 3,
        ]);
        //r44
        Recipe::create([
            'name' => " Shepherd's Pie ",
            'image' => "recipe_image",
            'preparation_time' => 6,
            'cooking_time' => 18,
            'description' => "In England, the birthplace of this hearty dish, classic shepherd's pie is most often made with a ground lamb filling. The States' version is often called a cottage pie, and uses ground beef instead of lamb. Both versions are delicious, and lamb can easily be subbed into this recipe following the same instructions. Filled with plenty of veggies, creamy mashed potatoes and an irresistible beef filling, this warming meal combines your sides + main all into one bowl of cozy goodness. ",
            'preparation_instructions' => "Step 1: Preheat oven to 400°. Make mashed potatoes: In a large pot, cover potatoes with water and add a generous pinch of salt. Bring to a boil and cook until totally soft, 16 to 18 minutes. Drain and return to pot. Step 2: Use a potato masher to mash potatoes until smooth. Add melted butter, milk, and sour cream. Mash together until fully incorporated, then season to taste with salt and pepper. Set aside. Step 3: Make beef mixture: In a large, ovenproof skillet over medium heat, heat oil. Add onion, carrots, garlic, and thyme and cook until fragrant and softened, 5 minutes. Add ground beef, season generously with salt and pepper, and cook until no longer pink, 5 minutes more. Drain fat. Step 4: Stir in frozen peas and corn and cook until warmed through, 3 minutes more. Step 5: Sprinkle meat with flour and stir to evenly distribute. Cook 1 minute more and add chicken broth. Bring to a simmer and let mixture thicken slightly, 5 minutes. Step 6: Top beef mixture with an even la er of mashed potatoes and bake until there is very little liquid visible and mashed potatoes are golden, about 20 minutes. Broil if desired. Step 7: Garnish with parsley before serving.",
            'portions' => 1,
            'total_time' => 18,
            'levels_id' => 2,
        ]);
        //r45
        Recipe::create([
            'name' => " Chicken Pot Pie Casserole ",
            'image' => "recipe_image",
            'preparation_time' => 10,
            'cooking_time' => 15,
            'description' => "If chicken pot pie excites you, but pie crust intimidates you, you've arrived at the perfect recipe. Classic chicken pot pie filling is baked into a stress-free casserole, and best of all, topped with biscuits for that tantalizing golden brown finish.",
            'preparation_instructions' => 'Step 1: Preheat oven to 375º with rack in the center. In a large skillet, melt butter over medium-high heat. Add carrots, celery, onion, thyme, and 1/2 teaspoon salt, and cook, stirring often, until softened, 5 to 7 minutes. Add flour, and stir to coat vegetables. Cook for 2 minutes more, then add milk, broth, mustard, garlic powder, and remaining 1/2 tsp salt, whisking to combine. Increase heat to high and bring to a boil. Immediately reduce heat to medium and simmer, stirring often, until thickened, 3 to 5 minutes. Fold in chicken and peas. Step 2: Transfer mixture to a 13"-x-9" baking dish. Arrange biscuits on top of filling. Sprinkle all over with salt and pepper. Step 3: Bake until filling is bubbling and biscuits are golden and risen, 22 to 25 minutes. Let cool 5 minutes before serving.',
            'portions' => 9,
            'total_time' => 15,
            'levels_id' => 1,
        ]);
        //r46
        Recipe::create([
            'name' => "Baked Penne Alla Vodka with Turkey",
            'image' => "recipe-UVMVm4VlrM2WBvRGkQp6.jpg",
            'preparation_time' => 5,
            'cooking_time' => 8,
            'description' => "There is nothing quite as comforting as a baked pasta dish. The sides get a little crispy and topping of melty cheese is to die for. Here we changed up the classic Penne alla Vodka a little bit and added in ground turkey. The result is a creamy pasta that satisfies every carb craving possible with a little extra boost of protein.",
            'preparation_instructions' => "Step 1: Preheat oven to 375°. In a large pot of boiling salted water, boil pasta until almost al dente, about 2 minutes less than directions call for. Drain. Step 2: Meanwhile, in a medium pot or large high-sided skillet over medium heat, heat oil. Add turkey and cook, breaking meat up with a wooden spoon until no longer pink, about 8 minutes. Drain any excess grease as needed.  Step 3: Return skillet over medium heat and season turkey with salt and pepper. Add onion and cook until softened, 5 minutes. Add garlic and cook until fragrant, 1 minute more. Add tomato paste and stir until meat is well coated and starts to darken, about 1 minute. Add vodka and cook, scraping up any brown bits on the bottom of the pan, until completely reduced, 1 to 2 minutes more. Add crushed tomatoes, heavy cream, 1/4 cup of Parmesan, and red pepper flakes. Bring to a simmer then reduce heat and let simmer while pasta continues to cook or at least until mixture is warmed all the way through, stirring occasionally. Step 4: Add drained pasta to sauce and stir to coat. Pour pasta into a large baking dish. Top with remaining 1/4 cup of Parmesan and mozzarella slices. Step 5: Bake until cheese is melty and sides are bubbling, about 25 minutes. Step  6: Top with fresh basil to serve.,",
            'portions' => 6,
            'total_time' => 13,
            'levels_id' => 2,
        ]);
        //r47
        Recipe::create([
            'name' => " Vegetarian Chili",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 8,
            'cooking_time' =>9 ,
            'description' => 'This vegetarian chili is till every bit as warm, comforting, and filling as a classic beef chili. Three types of beans do the heavy lifting in the chili and "beef" it up. Its filled with warm spices, and a jalapeño adds a little extra heat. Add a second or keep the seeds in for even more spice! Serve it on a cold night with a slice of homemade cornbread.',   
            'preparation_instructions' => "Step 1: In a large pot over medium heat, heat olive oil. Add onion, bell pepper, and carrots. Saute until soft, about 5 minutes. Add garlic and jalapeño and cook until fragrant, 1 minute. Step 2: Add tomato paste and stir to coat vegetables. Add tomatoes, beans, broth, and seasonings. Season with salt and pepper to taste. Step 3: Bring to a boil then reduce heat and let simmer, 30 minutes. Step 4: Serve with cheese, sour cream, and cilantro.",
            'portions' => 1,
            'total_time' => 17,
            'levels_id' =>1,
        ]);
        //r48
        Recipe::create([
            'name' => "One-Pot Vegetarian Chili Mac",
            'image' => "recipe-GAkXCiXncj9t2v6sA387.jpg",
            'preparation_time' => 8,
            'cooking_time' => 16,
            'description' => "Looking for a hearty weeknight dinner? Our smoky vegetarian chili mac is here to save the day! It all comes together in 1 pot, and it's SUPER versatile. Throw in your favorite bean and pasta shape, melt in your favorite cheese, and top with whatever you like! (As long as it's crunchy. Frito's are classic but fried onions, any corn/tortilla chip, or toasted nut would do the trick.) For a vegan version, sub in vegan cheese for the dairy cheeses, or skip it all together!",
            'preparation_instructions' => "Step 1: Heat olive oil in a large heavy-bottomed pot over medium heat. Add 3/4 onion, celery, and 3/4 of the jalapeños. (The rest of the onion and jalapeño are for garnish!) Season with salt and cook until vegetables are mostly tender and onions are translucent and lightly golden, about 8 to 10 minutes. Step 2: Add garlic and cook until fragrant, 1 minute. Add minced chili, cumin, and oregano, and cook, stirring frequently, for 1 minute more. Add 1/2 the cilantro and water, and use a wooden spoon to scrape up any browned bits from the bottom of the pan. Add crushed tomatoes along with any liquid in the can. Step 3: Add beans, dry pasta, and 1 teaspoon salt. Cover, bring up to a boil, then reduce heat to a simmer and let cook with lid ajar for 14 to 16 minutes, until pasta is tender. Step 4: Remove from heat and stir in cheeses until melted. Serve with crushed corn chips and the remaining sliced jalapeños and onion for garnish.,",
            'portions' => 6,
            'total_time' => 24,
            'levels_id' =>2,
        ]);
        //r49
        Recipe::create([
            'name' => "Vegan Crunchwraps",
            'image' => "recipe-AIEGEdcAbmJ0j5Ved60l.jpg",
            'preparation_time' => 9,
            'cooking_time' => 19,
            'description' => "We updated a fast food favorite to be totally vegan and completely irresistible. Creamy vegan queso dip and meaty lentils make a satisfying filling while a quick trip in a hot skillet adds crunch to every bite. To make them a little faster, make the lentils up to 4 days ahead, the queso the day before, and prep your lettuce and tomatoes the morning of. When it's time to eat, grab an extra set of hands to make assembly a snap.",
            'preparation_instructions' => "Step 1: Make lentil filling: In a large skillet over medium heat, heat oil. Add onion and cook until soft, 6 minutes. Add garlic and cook until fragrant, 1 minute more. Add tomato paste and chipotle pepper, and cook, mashing pepper with a wooden spoon, until tomato paste has darkened slightly, 2 minutes. Add cumin and coriander and season with salt. Add lentils and 1/4 cup cold water. Stir to combine, then cook, stirring and mashing some of the lentils occasionally, until lentils are heated through and partially mashed, and no liquid remains, about 5 minutes. Add more water a tablespoon at a time if skillet becomes dry. Step 2: Build crunchy wraps: Add a scoop of spiced lentils to the center of each flour tortilla, leaving a generous border clear for folding. Drizzle with chipotle queso, then top with a tostada shell. Spread tostada shell with an even layer of guacamole, then scatter lettuce and tomato on top. Step 3: Tightly fold edges of large tortilla toward the center, creating pleats. Carefully invert crunchy wraps so pleats are on the bottom and they stay together. Step 4: Heat a thin layer of oil in a medium skillet over medium heat. Once the oil is shimmering, add one crunchy wrap at a time, seam-side down, and cook until golden, 3 minutes per side. Transfer to a plate and repeat with remaining crunchy wraps.",
            'portions' => 9,
            'total_time' => 28,
            'levels_id' => 3,
        ]);
        //r50
        Recipe::create([
            'name' => "Baked Feta Pasta",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 8,
            'cooking_time' => 12,
            'description' => "This is the story about another viral TikTok trend that I kinda sorted wanted to hate... but didn't. It's not that I didn't think the idea sounded delicious. It's just that the whole thing seemed too simple. Obviously roasting a block of feta with bursting tomatoes is going to be amazing. But is it good enough to break the internet",
            'preparation_instructions' => "Step 1: Preheat oven to 400°. In a large ovenproof skillet or medium baking dish, combine tomatoes, shallot, garlic, and all but 1 tablespoon oil. Season with salt and red pepper flakes and toss to combine. Step 2: Place feta into center of tomato mixture and drizzle with remaining 1 tablespoon oil. Scatter thyme sprigs over tomatoes. Bake for 40 to 45 minutes, until tomatoes are bursting and feta is golden on top.  Step 3: Meanwhile, in a large pot of boiling salted water, cook pasta until al dente according to package directions. Reserve 1/2 cup pasta water before draining. Step 4: To skillet with tomatoes and feta, add cooked pasta, reserved pasta water, and lemon zest (if using) and stir until combined. Garnish with basil.",
            'portions' => 3,
            'total_time' => 20,
            'levels_id' => 2,
        ]);
        //r51
        Recipe::create([
            'name' => "Kung Pao Chicken Meatballs",
            'image' => "recipe-fiilD7RUHhWeYXRol4a5.jpg",
            'preparation_time' => 10,
            'cooking_time' => 20,
            'description' => "If you are looking to spice up your routine chicken dinners look no further. These chicken meatballs have a kick from a traditional kung pao sauce that gets most of its heat from dried red chilis, which you can always cut back on. Szechuan peppercorns also add a unique heat to the dish and can be found in most Asian markets and specialty grocery stores, but are worth looking for. Tellicherry peppercorns won't have the same flavor, but would be the best substitute as they have more flavor than traditional black peppercorns. These meatballs are filling on their own but serving over rice will help cut some of the heat!",
            'preparation_instructions' => "Step 1: In a medium bowl, combine ground chicken, garlic, ginger, green onions, and panko. Add egg and soy sauce and season with salt and few good cranks of pepper. Mix until well combined. Form into 16 equal sized meatballs. If mixture is too wet you can wet your hands lightly with water to help roll into balls. Step 2: In a large skillet over medium heat, heat oil. Add meatballs and cook until golden on all sides and internal temperature reaches 165°, 18 to 20 minutes. Remove from skillet and place on a plate to keep warm. Step 3: Meanwhile, in a small bowl, combine broth, soy sauce, cooking wine, vinegar, hoisin, and sugar. Add cornstarch and whisk until dissolved. Step 4: Wipe out any bits from skillet that are too dark. Return skillet over medium heat and add more oil as needed. Add bell peppers and cook until soft, 5 minutes. Add dried chilis, green onions, ginger, garlic, and pepper. Cook until fragrant, 2 minutes more. Add sauce mixture and return meatballs to skillet. Toss to coat meatballs. Reduce heat to a simmer and simmer until sauce is thickened and meatballs are warmed through, 5 minutes. Step 5: Top with peanuts and serve over rice.",
            'portions' => 5,
            'total_time' => 30,
            'levels_id' => 2,
        ]);
        //r52
        Recipe::create([
            'name' => "Balsamic Basil Chicken",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 3,
            'cooking_time' => 10,
            'description' => '"This is the perfect weeknight dinner. After marinating the chicken, everything including the veggie side!  comes together in one pan in less than 30 minutes. Call it another skillet chicken dinner win!"',
            'preparation_instructions' => "Step 1: In a large bowl, whisk together 1/4 cup olive oil, vinegar, and mustard. Add chicken thighs and toss to coat. Cover and refrigerate for 30 minutes or up to 4 hours. Step 2: Preheat oven 425°. In a large oven-safe skillet over medium-high heat, heat remaining oil. Shake off excess marinade from chicken and season all over with salt and pepper. Add to hot pan skin side-down, and cook until seared and golden, about 6 minutes. Flip chicken and cook until seared on other side, about 6 minutes. Step 3: Scatter zucchini and tomatoes around chicken. Season vegetables with salt and pepper, then transfer skillet to oven and bake until a thermometer inserted into the thickest part of the chicken reaches an internal temperature of 165°, about 15 minutes more. Step 4: Garnish with Parmesan and basil before serving.",
            'portions' => 3,
            'total_time' => 13,
            'levels_id' => 2,
        ]);
        //r53
        Recipe::create([
            'name' => "Thai Fried Rice",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 5,
            'cooking_time' => 6,
            'description' => "Fried rice remains the best thing to do with leftover rice. The slightly dried-out, day-old rice will absorb more of the flavors during the cooking process and crisp up more as it cooks.",
            'preparation_instructions' => "Step 1: In a small bowl, combine chilis and fish sauce. Set aside while you prep the rest of your ingredients. Step 2: Season chicken with salt and pepper. In a large skillet over medium-high heat, heat 1 tablespoon oil. Add chicken and cook, tossing occasionally, until cooked through, about 5 minutes. Remove chicken from skillet and set aside on a plate to keep warm. Drain skillet, if needed. Step 3: Return skillet over medium-high heat and heat remaining tablespoon oil. Add carrots and cook until softened, 3 minutes. Add garlic, green onions, and ginger and cook until fragrant, 1 minute. Add rice, 3 tablespoons of the fish sauce mixture, and oyster sauce. Toss until rice is well coated, then push rice to one side of pan. Step 4: On the empty side of the pan, add a little more oil if your pan is dry. Add beaten eggs and scramble with a rubber spatula until just barely set, then combine with rice. Return chicken to skillet and stir to combine. Step 5: Serve with cilantro, li	me wedges, and any remaining fish sauce mixture.",
            'portions' => 7,
            'total_time' => 11,
            'levels_id' => 3,
        ]);
        //r54
        Recipe::create([
            'name' => "Tofu Katsu Curry",
            'image' => "recipe-ilCBTxjspdu1uVs2VbT6.jpg",
            'preparation_time' => 7,
            'cooking_time' => 15,
            'description' => "This hearty Japanese dinner comes complete with crispy sesame-panko-crusted tofu, tender vegetables, and a rich and flavorful curry sauce. For a quicker version, swap out the curry for some cold shredded green cabbage, along with some katsu sauce for dipping.",
            'preparation_instructions' => "Step 1: Make curry roux: In a small saucepan, heat 2 tablespoons olive oil over medium heat. Add flour gradually, whisking to combine. Continue cooking, whisking constantly, until golden and fragrant, 1 to 2 minutes. Stir in spices and cook, stirring, until very fragrant, 30 seconds to 1 minute. (Mixture should be texture of wet sand.) Carefully transfer to a small bowl while you prepare vegetables. Step 2: Saute mushrooms In a large skillet over medium heat, heat 1 tablespoon olive oil. Add mushrooms and arrange in a single layer, cut side down. Cook undisturbed until cut sides are golden, about 4 minutes. Stir, season with salt, and cook 3 to 4 minutes more. Remove from heat. Step 3: Cut onion in half root to tip then cut each half into 4 thick slices, removing tip and root. Heat remaining tablespoon olive oil in a large pot over medium heat. Add onion, season with salt, and cook, stirring occasionally, until onions have softened slightly and are turning golden at edges, 4 minutes. Add ginger and cook until fragrant, 1 minute more. Step 4: To onions, add broth and a big pinch of salt. Bring to a boil, scraping up any brown bits with a wooden spoon. Reduce heat to a simmer. Transfer about 1/2 cup cooking liquid to a small bowl and whisk in about a quarter of the curry roux. Return mixture to pot and stir to combine. Repeat 3 more times until all of the roux is dissolved into the pot Add potato and simmer, partially covered, about 5 minutes. Step 5: Add carrots and half the grated apple. (The vegetables should just be covered with liquid; add more water as necessary.) Return to a simmer and cook, partially covered, until carrots and potatoes are just tender, 8 to 10 minutes. Step 6: Stir in cooked mushrooms, tomatoes, and remaining apple then season to taste with soy sauce. Step 7: On a cutting board, sandwich tofu between doubled layers of paper towels and press down slowly with a flat-bottomed pan or second cutting board to remove moisture without cracking block. Step 8: Discard paper towel and stand tofu up on its short, small side. Cut tofu into thirds, into 3 thinner rectangles. Season each slice on all sides with salt. Step 9: Make breading station: Add flour to one shallow bowl, nondairy milk to another shallow bowl, and panko to a third. Whisk mustard into bowl with milk and sesame seeds into bowl with panko. Line a baking sheet with paper towels and fit with a rack. Step 10: Work with one piece of tofu at a time, dredge tofu in flour, shaking off excess. Add the tofu to the milk mixture, then return it to the flour. Dip back in the milk, and finally into the panko mixture, pressing with your fingers to help crumbs adhere. Transfer breaded tofu to prepared rack and repeat with remaining pieces. Step 11: Heat about 1/2 inch vegetable oil in a large skillet over medium-high heat. The oil is ready when a piece of panko bubbles immediately when added to oil. Add the tofu to the hot oil and cook until golden on underside, 4 to 6 minutes. Flip and cook until golden on other side, 4 to 6 minutes more. Transfer to cooling rack and season with salt. Step 12: Serve tofu, sliced, over rice and curry.",
            'portions' => 8,
            'total_time' => 22,
            'levels_id' => 1,
        ]);
        //r55
        Recipe::create([
            'name' => "Homemade Crunchwrap Supreme",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 7,
            'cooking_time' => 14,
            'description' => "Here at Delish, we're so obsessed with Taco Bell's Crunchwrap Supreme that we have, not one, but TWO copycat recipes. And while we love our vegan crunchwrap, we still have a special place in our hearts for the original meat-loving version. This traditional copycat crunchwrap has all the main components of the iconic Taco Bell offering: seasoned ground beef, nacho cheese sauce, lettuce, tomatoes, sour cream, and, most importantly, a crunchy tostada shell!",
            'preparation_instructions' => "Step 1: In a large nonstick skillet over medium heat, combine ground beef and spices and season with salt and pepper. Cook, breaking up meat with a wooden spoon, until no longer pink, about 6 minutes. Remove meat to a bowl and set aside. Drain fat and wipe skillet clean. Step 2: Stack 4 large flour tortillas and place a tostada shell in the center. Using a paring knife, trace around edges of shell to cut 4 smaller flour tortilla rounds. Step 3: Build Crunchwraps: Add a scoop of ground beef to the center of remaining 4 large flour tortillas, leaving a generous border for folding. Drizzle cheese sauce over each, then place a tostada shell on top. Spread sour cream over each shell, then top with lettuce, tomato, and cheeses. Place smaller flour tortilla cutouts on top and tightly fold edges of large tortilla toward the center, creating pleats. Quickly invert Crunchwraps so pleats are on the bottom and they stay together. Step 4: In the same skillet over medium heat, heat oil. Add Crunchwrap seam-side down and cook until tortilla is golden, 3 minutes per side. Repeat with remaining Crunchwraps.",
            'portions' => 5,
            'total_time' => 21,
            'levels_id' => 1,
        ]);
        //r56
        Recipe::create([
            'name' => "Creamy Chicken Marsala",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 3,
            'cooking_time' => 21,
            'description' => "Chicken Marsala is a classic Italian American dish that's creamy, quick, and irresistible. The creamy sauce made of mushrooms, marsala wine, and heavy cream is straight-up drinkable, and we love serving it over a big pile of spaghetti or angel hair. The marsala wine makes it slightly sweet and is what gives it that addictive quality. It's the perfect weeknight dinner , and we don't even feel guilty making it three nights in a row. It's a real plus that this dish comes together in a flash.",
            'preparation_instructions' => "Step 1: In a shallow bowl, season flour with salt and pepper. Dredge chicken in flour. Step 2: In a large skillet over medium heat, melt 1 tablespoon butter and oil. Add chicken and cook until golden on both sides, about 5 minutes per side. Remove chicken from pan and place on a clean plate. Step 3: Make marsala sauce: Melt remaining 1 tablespoon butter in skillet and add mushrooms. Cook until mushrooms are golden and liquid has been released, 6 to 8 minutes (if the pan looks dry, add a splash of olive oil). Add garlic and cook until fragrant, then season with salt. Step 4: Add marsala, chicken broth, heavy cream, and parsley and bring to a simmer. Step 5: Return chicken to skillet and spoon sauce over breasts. Simmer until chicken is cooked through, about 10 minutes. Step 6: Serve over angel hair, if desired.",
            'portions' => 3,
            'total_time' => 24,
            'levels_id' => 1,
        ]);
        //r57
        Recipe::create([
            'name' => "Sesame Seed-Crusted Chicken Parm",
            'image' => "recipe-1TZjIhEi2t4W8VNx7AQu.jpg",
            'preparation_time' => 2,
            'cooking_time' => 17,
            'description' => "On the road to chicken parm perfection, we take two unexpected turns.",
            'preparation_instructions' => 'Step 1: Butterfly chicken breasts: Working with one at a time, place a hand on top of a chicken breast and carefully slice horizontally, stopping about 1/2" before its completely cut through. Open like a book so breast lies flat, then place between two pieces of plastic wrap. Use a meat mallet to gently pound chicken until 1/4" thick. Repeat with remaining chicken breasts. Step 2: In a large bowl, whisk buttermilk, mustard, and 2 teaspoons salt. Add chicken, turning to coat. Cover and refrigerate at least 1 hour, or up to overnight. Step 3: Bread chicken: In a large shallow bowl, whisk together sesame seeds, flour, cornstarch, Parmesan, remaining 1/2 teaspoons salt, and baking powder. Add 2 tablespoons buttermilk mixture and use your fingers to work the mixture into pea-size clumps. Step 4: Place a metal rack on a large baking sheet. Remove one of the chicken breasts from buttermilk mixture, letting excess drip back into bowl. Transfer to sesame mixture and turn to coat, pressing with fingers to help mixture adhere. Transfer to the rack and repeat with remaining chicken. Step 5: Fry chicken: Line a second baking sheet with paper towels. In a large high-sided skillet or Dutch oven, heat 1/2 cup oil over medium heat. (Its hot enough when oil bubbles vigorously after adding a small pinch of breading.). Carefully lower a breast into oil and fry, turning halfway through, until golden and cooked through, 4 minutes per side. Transfer to paper towels to drain; season with salt. Repeat with remaining chicken, adding more oil as needed. Step 6: Heat broiler. Whisk marinara with harissa and red pepper flakes. Spoon 1/3 sauce into a large baking dish. Add chicken breasts, overlapping slightly, and top with remaining sauce, provolone, and Parmesan. Broil until cheese is bubbly and golden in spots, 5 to 6 minutes. Let cool slightly. Step 7: Top with basil just before serving.',
            'portions' => 5,
            'total_time' => 19,
            'levels_id' => 1,
        ]);
        //r58
        Recipe::create([
            'name' => "Garlicky Roasted Cauliflower Pasta",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 2,
            'cooking_time' => 11,
            'description' => "Looking for a meatless weeknight meal that is easy to spin up and is absolutely comforting? Then look no further than this cauliflower pasta. They key to this recipe's deliciousness  (and what makes it perfect for making on a lazy night) is roasting.",
            'preparation_instructions' => "Step 1: Preheat oven to 425°. Cut off the top of head of garlic so that the tops of the cloves are exposed. Drizzle with 1 teaspoon oil and a small pinch of salt. Wrap in foil and roast until deeply golden, about 45 minutes. When done, open foil and allow to cool until cool enough to handle. Step 2: On a large sheet tray, toss cauliflower with 1 tablespoon oil, salt, pepper, and red pepper flakes and arrange in an even layer. Roast alongside garlic, until golden and bottoms start to crisp, about 30 minutes. Step 3: In a large pot of boiling salted water cook pasta according to package directions to al dente. Reserve 1/2 cup of pasta water, then drain. Step 4: Squeeze garlic cloves out of head into a small bowl and smash into a rough paste with a fork. Step 5: In same pot pasta was cooked in, add smashed garlic, reserved pasta water, and Parmesan. Stir to mostly melt cheese and evenly distribute garlic. Add pasta and toss to coat. Add remaining 2 tablespoons oil and lemon juice and season with more salt, pepper, and red pepper flakes. Toss in roasted cauliflower. Step 6: Garnish with toasted walnuts and more Parmesan to serve.",
            'portions' => 10,
            'total_time' => 11,
            'levels_id' => 1,
        ]);
        //r59
        Recipe::create([
            'name' => "Best-Ever Buffalo Chicken Pizza",
            'image' => "recipe-P4gBdZaZrRL5yWk81H7L.jpg",
            'preparation_time' => 8,
            'cooking_time' => 15,
            'description' => "Got some leftover roasted chicken? This pizza is the PERFECT way to use it! If you don't, shredding rotisserie chicken is a great alternative. If neither of those options are available, it's easy to boil some chicken breasts and shred them for topping.",
            'preparation_instructions' => "Step 1: Preheat oven to 500°. Brush two large baking sheets with vegetable oil and sprinkle each with a layer of cornmeal. Step 2: Place butter in a medium microwave-safe bowl. Microwave until melted, 20 to 30 seconds. Whisk in hot sauce and garlic powder until combined. Pour half of the buffalo sauce over chicken and toss to coat. Step 3: On a lightly floured surface, shape each half of pizza dough into a round ball, then press down the center of each to create a 1/2 crust. With the dough resting on the back of your hands and your knuckles, gently stretch dough out with the help of gravity by moving your hands inch by inch along the crust. Transfer to prepared baking sheets. Step 4: Add half of the remaining buffalo sauce to each pizza and spread all over the dough (leaving the outer 1 bare). Divide sauced chicken, torn mozzarella, blue cheese, and red onion evenly between the pizzas. Step 5: Bake pizzas until crust is golden and cheese is melty, 15 to 17 minutes. Garnish with green onions and a drizzle of hot sauce (if using) and serve immediately.",
            'portions' => 10,
            'total_time' => 15,
            'levels_id' => 2,
        ]);
        //r60
        Recipe::create([
            'name' => "One-Pot Shrimp Primavera",
            'image' => "recipe-VWdze0SXMYUvSKHJOKUe.jpg",
            'preparation_time' => 3,
            'cooking_time' => 14,
            'description' => "A pasta that's full of veggies? Sign us up! This easy one-pot pasta comes together quickly and gets your daily veggies in. We use some of our favorite classic veggies for primavera, but use what you have! Throw in some broccoli or squash or some greens like kale and spinach. Nothing is a bad idea here. The pasta is still creamy and comforting and everything else you want your pasta dishes to be. The shrimp cooks quickly, so don't add it until you feel your pasta is almost done cooking!",
            'preparation_instructions' => "Step 1: In a large pot over medium heat, heat oil. Add onions, bell peppers, tomatoes, and squashes. Cook until softened, about 5 minutes. Add garlic and cook until fragrant, about 1 minute more. Step 2: Add pasta, water, half-and-half, oregano, salt, pepper, and red pepper flakes and season with salt and pepper. Bring to a boil, and cook for 15 minutes. Add shrimp and cook until shrimp is opaque and pasta is al dente, 3 to 5 minutes more. Stir in Parmesan. Step 3: Top with basil before serving.",
            'portions' => 6,
            'total_time' => 14,
            'levels_id' => 1,
        ]);
        //r61
        Recipe::create([
            'name' => "Black Bean Tostadas",
            'image' => "recipe-lLVNToCpCON10fVfsiqP.jpg",
            'preparation_time' => 1,
            'cooking_time' => 27,
            'description' => "With only 5 ingredients these black bean tostadas are the easiest and fastest meal to throw together. You can always add on additional toppings like corn salsa, avocado ranch, or endless crunchy veggies like radishes or pickled red onions, but here we keep things simple. With ingredients you're likely to have on hand, these tostadas make for a last minute, easy meal you'll have on repeat.",
            'preparation_instructions' => "Step 1: Preheat oven to 350°. In a small saucepan over medium heat, add beans and 1 cup of water. Bring to a simmer and let simmer until beans are warmed through, about 10 minutes. Smash with a wooden spoon until most of the beans are smashed with some whole remaining. Add more water as needed to help create a smoother consistency. Step 2: Meanwhile, place tostadas on a large baking sheet and sprinkle cheese evenly over each. Bake until cheese is melty, about 5 minutes. Step 3: Top tostadas with beans, avocado slices, and hot sauce.,",
            'portions' => 10,
            'total_time' => 27,
            'levels_id' => 1,
        ]);
        //r62
        Recipe::create([
            'name' => "Homemade Falafel",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 8,
            'cooking_time' => 25,
            'description' => "Crispy on the outside, full of herby, spicy goodness inside... of all the things you can stuff between bread, falafel is one of our favorites. And while there's nothing as quick as grabbing a sandwich from your favorite falafel joint, our homemade falafel is a cinch. Read on for more tips on how to make this take-out classic at home. And if you're looking for more meatless meals, check out our favorite easy vegan recipes. ",
            'preparation_instructions' => 'Step 1: In a food processor fitted with a metal blade, combine chickpeas, garlic, shallot, parsley, cumin, coriander, and flour and season with salt and pepper. Pulse until mixture is coarse and mealy ”do not over blend!. Step 2: Form mixture into falafel balls about 2" in diameter, squeezing to compact. Transfer to chill in the refrigerator while oil heats. Step 3: In a pot, heat 1 vegetable oil until a drop of water added to the oil sizzles and pops. Step 4: Fry falafels until golden, then transfer to a paper towel-lined plate and season immediately with salt.Step 5: To make yogurt sauce: In a medium bowl, whisk together yogurt, lemon juice, oil, and dill. Season with salt and pepper. Step 6: To make tahini sauce: In a medium bowl, whisk together tahini, garlic, lemon juice, and warm water. Season with salt. (If you prefer a thinner sauce, whisk in more warm water 1 tablespoon at a time.). Step 7: Serve falafels in pita with lettuce, tomatoes, and cucumber and drizzle with either sauce.',
            'portions' => 5,
            'total_time' => 25,
            'levels_id' => 2,
        ]);
        //r63
        Recipe::create([
            'name' => "Baked Risotto with Lemon, Peas and Parmesan",
            'image' => "recipe-SkxmGKGqU0dFiPyb9MvH.jpg",
            'preparation_time' => 10,
            'cooking_time' => 16,
            'description' => "Some dishes immediately conjure up visions of long, romantic dinners in Italy. There's lamb rag, veal marsala, and of course, perfectly creamy risotto. Thankfully, you don't have to get on a plane to eat it, or even go out to a restaurant. It's all possible with this baked risotto with lemon, peas, and Parmesan.",
            'preparation_instructions' => 'Step 1: Preheat oven to 375°F. Melt 2 tablespoons butter in a Dutch oven over medium-high heat. Step 2: Using a Y-peeler, remove two 1"-thick strips of zest from the lemon. Add onion and lemon zest to the butter and cook, stirring often, until softened, about 5 minutes. Add garlic and cook, stirring, until fragrant, about 1 minute. Stir in rice, broth, and 1 teaspoon salt. Bring to a simmer, cover, and transfer to the oven. Step 3: Bake until rice is tender, 20 minutes. Carefully remove the lid and stir in Parmesan, peas, pepper, remaining 2 tablespoons butter and1/2 teaspoon salt, stirring until butter is melted and peas are warm. Cut the lemon in half and squeeze half of the juice into the risotto; stir to combine. Remove lemon zest and serve topped with more Parmesan and parsley.',
            'portions' => 2,
            'total_time' => 16,
            'levels_id' => 1,
        ]);
        //r64
        Recipe::create([
            'name' => "Chicken Fried Rice",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 10,
            'cooking_time' => 28,
            'description' => "Chicken fried rice is the comfort dish of Chinese food. It's been around for a very long time and is also common in East, Southeast, and South Asian cuisines. The dish started as way to use leftover fried rice that has dried out some and may not be great on its own, but is still perfectly edible. The addition of oil and soy sauce and veggies and meat spruce up the rice for a delicious meal. A traditional Chinese fried rice would be made in a wok over high heat, but we've made ours in a cast iron skillet since they are more common in home kitchens. This take on the favorite is easy to make and makes the perfect lunch or dinner. Don't want chicken? Make it with shrimp or go vegetarian and make it with pineapple!",
            'preparation_instructions' => "Step 1: In a medium skillet over medium heat, heat olive oil. Season chicken with salt and pepper on both sides, then add to skillet, and cook until golden and no longer pink, 8 minutes per side. Remove from skillet and let rest 5 minutes, then cut into bite-sized pieces. Step 2: To the same skillet, heat 1 tablespoon sesame oil. Add onion and carrots and cook until soft, 5 minutes, Add garlic and ginger and cook until fragrant, 1 minute more. Stir in rice and peas and cook until warmed through, 2 minutes. Step 3: Push rice to one side of skillet and add remaining tablespoon sesame oil to other side. Add egg and stir until almost fully cooked, then fold eggs into rice. Add chicken back to skillet with soy sauce and green onions and stir to combine.",
            'portions' => 3,
            'total_time' => 28,
            'levels_id' => 3,
        ]);
        //r65
        Recipe::create([
            'name' => "Creamy Tuscan Chicken ",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 1,
            'cooking_time' => 22,
            'description' => "Be sure to have some crusty bread on hand, because this sauce is KILLER. When it comes to chicken breast recipes, its hard to beat this one. The sauce is simple, but so flavorful. It's full of garlic, tomatoes, and most importantly, cream. It's bright and easy and just as good in the summer as it is in the winter. It's a great dinner for when you want comfort food and good enough to serve to dinner guests. We love it with bread, but you can also serve it over rice or pasta. If you love this as much as we do, try it our Tuscan Salmon next!",
            'preparation_instructions' => "Step 1: In a skillet over medium heat, heat oil. Add chicken and season with salt, pepper, and oregano. Cook until golden and no longer pink, 8 minutes per side. Remove from skillet and set aside. Step 2: In the same skillet over medium heat, melt butter. Stir in garlic and cook until fragrant, about 1 minute. Add cherry tomatoes and season with salt and pepper. Cook until tomatoes are beginning to burst then add spinach and cook until spinach is beginning to wilt. Step 3: Stir in heavy cream and parmesan and bring mixture to a simmer. Reduce heat to low and simmer until sauce is slightly reduced, about 3 minutes. Return chicken to skillet and cook until heated through, 5 to 7 minutes. Step 4: Serve with lemon wedges.",
            'portions' => 2,
            'total_time' => 23,
            'levels_id' => 3,
        ]);
        //r66
        Recipe::create([
            'name' => "Creamy Kale & Gnocchi Bake",
            'image' => "recipe-ltM2TlkQZWKrP4kZYVge.jpg",
            'preparation_time' => 5,
            'cooking_time' => 17,
            'description' => "Fans of creamed spinach will absolutely love this hearty, creamy kale and gnocchi bake that puts the classic side dish front-and-center on your plate with gnocchi as the main attraction. It's quick to put together since the gnocchi cook right in the sauce, making them extra creamy and delicious.",
            'preparation_instructions' => "Step 1: Preheat oven to 375º. In a large pot over medium-high heat, heat oil. Add kale a large handful at a time, tossing with tongs and slightly wilting each batch before adding the next, until all kale is added and leaves are bright green and just wilted, about 5 minutes total. Season kale with 1/2 teaspoon salt and transfer into an 11-by-8 (2-quart) baking dish. Step 2: In same pot over medium heat, melt butter. Cook shallots and garlic, stirring often, until tender and light golden, 3 to 5 minutes. Add flour and cook, stirring, until lightly toasted, about 1 minute more. Step 3: While whisking, slowly pour in milk until combined and smooth. Whisk in mustard, nutmeg, 3/4 teaspoon salt, and 1/4 teaspoon pepper. Stir in gnocchi. Bring mixture to a simmer over medium heat, stirring occasionally, and cook until thickened slightly, about 1 minute. Step 4: Remove pot from heat and whisk in 1 cup Monterey Jack cheese until melted. Return cooked kale to pot and toss to combine, then scrape kale mixture into baking dish. Top with Parmesan and remaining 1 cup Monterey Jack cheese. Step  5: Bake until filling is bubbling and top is golden, 16 to 20 minutes. Let cool 10 minutes before serving.",
            'portions' => 4,
            'total_time' => 22,
            'levels_id' => 1,
        ]);
         //r67
         Recipe::create([
            'name' => "Bucatini all'Amatriciana",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 10,
            'cooking_time' => 20,
            'description' => "Bucatini is one of our top favorite pastas! It's a long thin noodle just like spaghetti, but with hole through the middle. It's extra thickness gives it a better bite and holds up to a rich tomato sauce. Bucatini all'Amatriciana is made with pancetta and adds extra saltiness and flavor to the otherwise classic tomato sauce.",
            'preparation_instructions' => "Step 1: In a large pot of boiling salted water, cook pasta until al dente according to package directions. Reserve1/2 cup pasta water before draining. Step 2: In another large pot over medium heat, cook pancetta until crispy, about 10 minutes. Using a slotted spoon, transfer pancetta to a paper towel lined plate. Drain all but 2 tablespoons of fat from pot. Add onions and cook until soft, about 5 minutes. Add garlic and red pepper flakes and cook until fragrant, 1 minute more. Add tomatoes and butter. Bring to a simmer and let cook for 10 minutes. Season with salt and pepper and more red pepper flakes, if desired. Step 3: Add cooked pasta, 1/4 cup pasta water, and pancetta and toss to combine, adding more pasta water if necessary to help loosen and bind the sauce to the pasta. Step 4: Serve topped with lots of Pecorino and fresh basil.",
            'portions' => 5,
            'total_time' => 30,
            'levels_id' => 2,
        ]);
        //r68
        Recipe::create([
            'name' => "Crockpot White Chicken Chili",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 10,
            'cooking_time' => 15,
            'description' => "Chili is quintessential cold weather cozy food, with roots in the American West, specifically Texas and New Mexico. The earliest chili (or chili con carne) recipes featured just three ingredients red meat, spices, and chiles. Since its inception, chili has evolved and come to include tomatoes, beans, corn, and onions, along with toppings like shredded cheese and sour cream, to tame the traditionally spicy dish. White chili (aka chile verde) emerged as a milder version of the spicy red classic. Typically made with pork or chicken, spices, white beans, and green chiles, white chili definitely has a welcome spot on our rotation of classic stews.",
            'preparation_instructions' => "Step 1: Add broth, beans, chicken, green chiles, onion, garlic, jalapeño, oregano, and cumin to the bowl of your slow cooker. Season with salt and pepper and cook on high for 2 to 3 hours, until chicken is tender. Step 2: Remove chicken from chili and shred. Use a potato masher to gently mash about 1/3 of the beans before returning chicken to slow cooker. Stir in shredded chicken and corn and cover and season with more salt and pepper if needed. Leave slow cooker on warm until ready to serve. Step 3: To serve, top with sour cream, avocado, jalapeño, cilantro, and a squeeze of lime juice.",
            'portions' => 9,
            'total_time' => 25,
            'levels_id' => 1,
        ]);
        //r69
        Recipe::create([
            'name' => "Cilantro-Lime Chicken",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 10,
            'cooking_time' => 15,
            'description' => "Cilantro and lime is a classic duo that we can't get enough of. If you're also a major fan, check out our Cilantro Lime Shrimp Lettuce Wraps. You won't be disappointed.",
            'preparation_instructions' => "Step 1: Whisk together 2 tablespoons oil, lime juice, cilantro, garlic, cumin, and red pepper flakes. Add chicken and toss to coat. Let marinate in fridge 30 minutes and up to 2 hours. Step 2: When ready to cook, preheat oven to 425°. In a large ovenproof skillet over medium-high heat, heat remaining 2 tablespoons oil. Season chicken with salt and pepper, then add to skillet skin-side down and pour in remaining marinade. Sear until skin is golden and crispy, about 6 minutes. Flip and cook 2 minutes more. Step 3: Transfer skillet to oven and bake until chicken is cooked through, 10 to 12 minutes. Step 4: Serve over rice drizzled with pan drippings.",
            'portions' => 7,
            'total_time' => 25,
            'levels_id' => 1,
        ]);
        //r70
        Recipe::create([
            'name' => "Perfect Fish Tacos",
            'image' => "recipe-placeholder.png",
            'preparation_time' => 10,
            'cooking_time' => 15,
            'description' => "Love fish tacos? Well, these are the end-all be-all. Read on to see what makes these tacos so special.",
            'preparation_instructions' => "Step 1: In a medium shallow bowl, whisk together olive oil, lime juice, paprika, chili powder, cumin, and cayenne. Step 2: Add cod, tossing until evenly coated. Let marinate 15 minutes. Step 3: Meanwhile, make slaw: In a large bowl, whisk together mayonnaise, lime juice, cilantro, and honey. Stir in cabbage, corn, and jalapeño. Season with salt and pepper. Step 4: In a large nonstick skillet over medium-high heat, heat vegetable oil. Remove cod from marinade and season both sides of each filet with salt and pepper. Add fish flesh side-down. Cook untilopaque and cooked through, 3 to 5 minutes per side. Let rest 5 minutes before flaking with a fork. Step 5: Assemble tacos: Serve fish over grilled tortillas with corn slaw and avocado. Squeeze lime juice on top and garnish with sour cream.",
            'portions' => 6,
            'total_time' => 25,
            'levels_id' => 3,
        ]);
    }
}
