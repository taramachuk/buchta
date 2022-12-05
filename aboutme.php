<?php
session_start();
?>
<?php
require 'templates/navigation.php';
?>
    <div>
        <main class="container form">
           <h1 class="form__header">about me</h1>
           <div class="aboutme">
                <div class="cv-left">
                    <div class="cv-header">
                        <img class="cv-photo" src="./static/default-avatar.png" alt="">
                        <div class="cv-name">
                            <h2>Taras Pryimachuk</h2>
                            <span class="cv-name-major" style="opacity: .7;"> front-end developer</span>
                            <a href="#"><div class="cv-btn">portfolio</div></a>
                        </div>
                    </div>
                    <div class="omnie">
                        <section>
                            <h2 class="cv-h2">about me</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit illo facilis eveniet recusandae earum beatae atque minima aperiam vero quam laborum dolorem, et accusantium, asperiores pariatur deserunt provident fuga esse ut. At temporibus ab harum eius optio tempore eaque, accusamus praesentium fugiat ex quae repellendus tenetur maiores laudantium consectetur nam!</p>
                        </section>
                    </div>
                </div>
                <div class="cv-right">
                    <section>
                        <h2 class="cv-h2">programing languages</h2>
                        <div class="cv-list">
                            <ul>
                                <li>html</li>
                                <li>css</li>
                                <li>js</li>
                                <li>php</li>
                                <li>sql</li>
                            </ul>
                            <ul>
                                <li>python</li>
                                <li>c/c++</li>
                                <li>ruby</li>
                                <li>go</li>
                                <li>rust</li>
                            </ul>
                        </div>
                    </section>
                    <section>
                        <h2 class="cv-h2">exp</h2>
                        <div class="cv-list">
                            <ul>
                                <li>2020-2048: google</li>
                                <li>1900-1990: facebook</li>
                            </ul>
                        </div>
                    </section>
                    <section>
                        <h2 class="cv-h2">education</h2>
                        <div class="cv-list">
                            <ul>
                                <li>harvard</li>
                                <li>sei</li>
                            </ul>
                        </div>
                    </section>
                    <section>
                        <h2 class="cv-h2">languages</h2>
                        <div class="cv-list">
                            <ul>
                                <li>english</li>
                                <li>polish</li>
                            </ul>
                            <ul>
                                <li>ukrainian</li>
                                <li>elvish</li>
                            </ul>
                        </div>
                    </section> 
                </div>
           </div>
        </main>
    </div>
<?php
require 'templates/footer.php';
?>