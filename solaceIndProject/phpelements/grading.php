<?php
    $page = "FairFax_Grading";
    $path="";
    include($path . "inc/header.php");
    include($path . "inc/nav.php");
?>
        <main id="gradingpagecontent">
            <h1>Grading Page</h1>

            <section id="oj">
                <h2>Original Javascript</h2>
                <p>Creating the image change for the sildeshow at the bottom of the index page</p>
            </section>

            <section id="dhtml">
                <h2>DHTML</h2>
                <p>I partly combined this with the original javascript. there is a default image and the images, links and corresponding text change with javascript</p>
                <p>Another small DHTML addition is the stars on the comment form. Had the find a way to alter a form using combinations of HTML and CSS</p>
            </section>

            <section id="Extras">
                <h2>Extras</h2>
                <p>1. Creating the dynamic hamburger menu</p>
                <p>2. Back to the top button on each page</p>
                <p>3. Using javascript for a lot of the buttons to make it valid and more responsive</p>
                <p>4. Making Javascript animations for images on hiking and biking pages</p>
                <p>5. FavIcon</p>
                


            </section>

            <section id="designTechniques">
                <h2>Good Design Techniques - CRAP</h2>
                <p>Contrast: I tried to put thought into my color and visual contrast on the page. when implementing links and buttons I used font weight contrast and opacity change to indicate navigation<br>Repetition: Used the same basic formats for each level of page, such as similar introduction areas for pages on the same level or with similar content.<br>Alignment: I made all the photos and div text sections the same width when possible.<br>Proximity: Gave an good  amount of spacing between items to make everything more readable. I also used borders to divide different content. I implemented a fair amount of white space to make the page flow better and overall empathize the content</p>
            </section>
        
            <section id="organization">
                <h2>Organization of Information</h2>
                <p>I organized everything to be readable, and fit the flow of the page. I utilized grids to give the site a clear content layout and better control overall organization.</p>
            </section>

            <section id="Content">
                <h2>Content</h2>
                <p>I have included content about all the important places that I included in the website. Each image and description was chosen and written with thought and purpose. I included a like to an interactive google map on my homepage. I also added tail maps for each hiking and biking trail, because I thought it would be better to have these maps more readily available. I plan to add images of maps or some kind of popup, possible to a slide show for the other locations(recusants, stores ex...). I could make this element with css but I think it would look and behave better if created interactively with Javascript elements</p>
            </section>

            <section id="CQuality">
                <h2>Content Quality</h2>
                <p>I have 10 Content Pages, 2 other pages:</p>
                <ol>
                    <li>Homepage</li>
                    <li>Outdoors Page</li>
                    <li>Hiking Page</li>
                    <li>Biking Page</li>
                    <li>Food Page</li>
                    <li>Breakfast and Lunch Page</li>
                    <li>Dinner and Drinks Page</li>
                    <li>Stores Page</li>
                    <li>Events Page</li>
                    <li>Contact Page</li>
                    <li>Reference Page</li>
                    <li>Grading/About Page</li>
                </ol>
                <p>I did my best to include all necessary information on each page. I felt a need to include the outdoors and food pages as a kind of intro page that leads to more specific information</p>
            </section>

            <section id="Design">
                <h2>Code Design Requirements</h2>
                <p>I checked that all my HTML and CSS is has a clear layout and everything is indented and correctly positioned. I tried to use sections and specific semantics when considering organization. I do use div's to connect elements that I want to be blocked together, such as h2 tags and p tags. I use a universal CSS file for all pages, and have divided related sections by comment. I also implemented all media queries and responsive elements that the bottom of the page. I designed the document with a desktop-first method, so all the responsive styles are as the screen size decreases.</p>
            </section>

            <section id="Interaction">
                <h2>Interaction Design & Navigation</h2>
                <p>I have a global top nav which includes access to all the pages. There are dropdown elements and I also utilize svg graphics to lead to some pages, Homepage, Reference Page, and Grading page. I thought this added a interesting visual aspect, as well as more visually pleasing spacing element. I plan on adding breadcrumbs element with javascript to be able to implement a more widespread rule that would work with any amount of pages. But When on a page I made the navigation of that page bolder.</p>
            </section>
        
            <section id="validates">
                <h2>HTML & CSS Validates / Cross Browser Compatibility</h2>
                <p>The CSS validates. All of the html validates except for the Outdoors and Food pages, where I wrap a button with links. For the final I am going to make the navigation happen with Javascript and add other unique elements. But before then I wanted to emulate as close as I can get to how I want it to look style-wise with CSS, and this was the only way it would work.</p>
            </section>
        
            <section id="grading">
                <h2>Grading Page Document what you have done linked from your homepage.</h2>
                <p>I linked this grading document with an svg icon on the top-nav</p>
            </section>

            <section id="responsive">
                <h2>Responsive Web Design</h2>
                <p>...</p>
            </section>
        <!-- php here -->
        <?php
            echo "<p class='path'>grading</p>";
            include($path . "inc/footer.php");
        ?>