    <div class="callout large intro">
    <div class="row column text-center">
        <h1><a href="index.php">GPA Yearbook</a></h1>
        <p class="lead">Making Memories you can Save Forever</p>
        <!--<a href="#" class="button large">Book I: The Sentence</a>
        <a href="#" class="button large hollow">Book 2: The Paragraph</a>-->
    </div>
    </div>

    <ul class="tabs" data-tabs id="books">
        <li id="2018-tab" class="tabs-title <?php if( $page == '2018-tab' ) echo 'is-active'; ?>"><a id="2018-link" href="#" aria-selected="true">2018</a></li>
        <li id="2017-tab" class="tabs-title <?php if( $page == '2017-tab' ) echo 'is-active'; ?>"><a id="2017-link" href="#">2017</a></li>
        <li id="2016-tab" class="tabs-title <?php if( $page == '2016-tab' ) echo 'is-active'; ?>"><a id="2016-link" href="#">2016</a></li>
        <li id="2014-tab" class="tabs-title <?php if( $page == '2014-tab' ) echo 'is-active'; ?>"><a id="2014-link" href="#">2014</a></li>
        <li id="newsletter-tab" class="tabs-title <?php if( $page == 'newsletter-tab' ) echo 'is-active'; ?>"><a id="newsletter-link" href="#">Newsletters</a></li>
        <li id="websites-tab" class="tabs-title"><a id="websites-link" href="http://gpa.kr/student-web">Student Websites</a></li>
    </ul>

    <div class="tabs-content" data-tabs-content="books">
      <div class="row">
          <a name="about"></a>
