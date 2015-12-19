
My website is an online resume that has many features to it. I will go page-by-page explaining what each page’s purpose is,
 as well as explain what technologies are used. Each page has the same color scheme and fonts. 

The website is hosted at:
 http://mcmpw6cs2830.azurewebsites.net/madden/index.php
 
 									**IMPORTANT**
 I do not own the picture or video displayed on this website
 


First I will explain the main page, also named “index.” This is the main page and is meant
 to be a portal to other pages. On the top is a navigation bar, which was made using Bootstrap UI.
  I made some design modifications to it. On the left side is my name, and when it is clicked on,
   it will bring you back to the main page. On the right side of the tool bar are the links to 
   the other pages on the website: About, Resume, Contact, Portfolio and Login. In the middle 
   of the main page there is a slideshow that was made from Bootstrap. As it slides through each picture, 
   the caption also changes with it. 

The next page is the “About” page. The purpose of this page is to show the reader my background. 
The navigation bar is on top of this page. Under that is another Bootstrap slideshow, this time with 
different pictures and captions. Below that are small paragraphs about my life. I was able to center 
them by using Bootstrap’s grid system. Each paragraph is in a row, separated into three columns. 
I placed the paragraphs into the middle column. After the first two rows, there is a row that has 
a third party widget embedded into it. The widget shows my Instagram photos; each photo is in a 
line and slides across the page. After that there is another paragraph. There is also a footer, 
which has the title of the website as well as another navigation bar. It also contains social media 
logos, like Instagram, LinkedIn, Google+, and Github. If you click on each of these it will bring you 
to my accounts for each of these sites. Excluding one page, the bottom footer is a separate file 
that is added to each page by using Jquery. 

The next page is my resume page, which I use to demonstrate my work history to readers. 
Similar to the other pages, it still includes the top navigation bar and the bottom footer. 
It also contains a slideshow, but it only has one page. The caption for the picture contains 
a button and when you click on it, it uses HTML 5 to download my resume in a docx file. 
Beneath that is a detailed resume, formatted using the bootstrap grid. The titles on the 
left are in a 4-span while the right is an 8-span. This makes the left smaller than the right. 

The next page is the Contact page. This page shows my contact information and also gives 
you an option to fill out a form. Like the other pages, it still includes the top navigation 
bar and the bottom footer. It also contains a grid slideshow with only one picture. Below that,
 using the Bootstrap grid system, my contact information is on the left and a picture of me on 
 the right. On the left side, there are two buttons directly underneath my address. One button 
 lets a user download my resume. The other button, when clicked, uses Ajax to grab data from a 
 json file, which is created in the page json.php. It will then display the information just 
 right of the title “School Address.” Below that is a Google map and a form. I was hoping to get the map 
 to go to my school address when the button mention earlier was clicked. For now, it simply shows the
  general region of Columbia. The form on the right allows you to leave your information and any other 
  comments for the website’s owner. This uses the GET function to grab the information and leave it in 
  another file. 

The portfolio page only links to my Github account. One day I do hope to make use of third party Github 
widgets to display my portfolio, but I did not like the widgets available. 

The last page is the Login page. This page allows you to log in to obtain exclusive humorous content. 
Like the other pages, it still includes the top navigation bar and the bottom footer. 
The login title makes use of CSS and shadows. To log in, type in the credentials then click “Submit.”
 If the wrong password is entered, it displays: “Error: Incorrect username or password.” 
 This page makes use of PHP and session variables. You cannot get to the next page unless it can make a session.
  When you are logged in, you are greeted by a large welcome page. Below that is an embedded YouTube video of Bob Ross.
   Underneath that is a logout link. Once clicked, it will destroy the session and log the user out. 
   This page does include a top navigation bar, but not a footer. My reasoning is to keep the user on this page and 
   make them logout if they want leave this page. 
