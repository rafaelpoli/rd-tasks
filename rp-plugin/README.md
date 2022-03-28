Create a WordPress plugin from scratch that does the following:

OK    1) When a page is created it makes a HTTP POST JSON request that includes the id of
    the page that has been created

OK    2) When a page is modified it makes a HTTP POST JSON request that includes the id of
    the page that has been modified

OK    3) When a page is deleted it makes a HTTP POST JSON request that includes the id of
    the page that has been deleted

OK    4) The calls need to be de-bounced every 1 hour, so that if the same page is modified
    5 times in 1 hour, only one HTTP request is made

    5) Bonus: de-bounce all HTTP calls and send all changes in one payload as an array

