<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Asset/image/msb.png">
    <title>Shishir Bhuiyan</title>

    <link rel="stylesheet" href="Asset/css/style.css">
    <script src="./Asset/js/jquery-3.5.1.min.js"></script>
    <script src="./Asset/js/print.js"></script>

    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  margin: 40px 0px;
}


.wrapper {
  max-height: 1100px;
  max-width: 900px;
  margin: auto;
  padding: 5px;
  display: flex;
  flex-direction: column;
}
.wrapper .top {
  display: flex;
}
.wrapper .top #leftBar {
  flex: 0 0 40%;
  max-width: 40%;
  -moz-column-gap: 50px;
       column-gap: 50px;
}
.wrapper .top #leftBar #profile {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding-bottom: 20px;
}
.wrapper .top #leftBar #profile .profileImage {
  flex: 0 0 100%;
  max-width: 100%;
  margin: 10px 0px 10px 0px;
}
.wrapper .top #leftBar #profile .profileImage img {
  height: 150px;
  width: 150px;
  box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
}
.wrapper .top #leftBar #profile .profileTitle {
  flex: 0 0 100%;
  max-width: 100%;
  text-align: center;
}
.wrapper .top #leftBar #profile .profileTitle .titleName {
  color: rgb(0, 0, 0);
  font-size: 30px;
  font-weight: 900;
}
.wrapper .top #leftBar #profile .profileTitle .titleJob {
  color: rgb(23, 23, 23);
  font-size: 20px;
  font-weight: normal;
}
.wrapper .top #leftBar #about .aboutTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  margin: 5px 0px 5px 0px;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .top #leftBar #about .aboutTitle img.lineone {
  height: 3px;
  width: 30px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 22px;
  left: 0px;
}
.wrapper .top #leftBar #about .aboutTitle img.linetwo {
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .top #leftBar #about .aboutText {
  font-family: "Times New Roman", Times, serif;
}
.wrapper .top #leftBar #contact {
  margin: 10px 0px 10px 0px;
}
.wrapper .top #leftBar #contact .contactTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  margin: 5px 0px 5px 0px;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .top #leftBar #contact .contactTitle img.lineone {
  height: 3px;
  width: 30px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 22px;
  left: 0px;
}
.wrapper .top #leftBar #contact .contactTitle img.linetwo {
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .top #leftBar #profilehandler {
  margin: 10px 0px 10px 0px;
}
.wrapper .top #leftBar #profilehandler .handlerTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  margin: 5px 0px 5px 0px;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .top #leftBar #profilehandler .handlerTitle img.lineone {
  height: 3px;
  width: 30px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 22px;
  left: 0px;
}
.wrapper .top #leftBar #profilehandler .handlerTitle img.linetwo {
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .top #leftBar #profilehandler .handlerAddress {
  display: flex;
  flex-wrap: wrap;
}
.wrapper .top #leftBar #profilehandler .handlerAddress p {
  padding: 2px;
  margin: 3px 0px 10px 0px;
  display: flex;
}
.wrapper .top #leftBar #profilehandler .handlerAddress p a {
  margin-top: -10px;
  text-decoration: none;
  background-color: #FFFFFF;
  color: black;
  padding: 5px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  border-radius: 5px;
}
.wrapper .top #leftBar #profilehandler .handlerAddress p img {
  margin-bottom: -3px;
}
.wrapper .top #rightBar {
  flex: 0 0 50%;
  max-width: 50%;
  margin-left: 30px;
}
.wrapper .top #rightBar #education {
  margin-bottom: 30px;
}
.wrapper .top #rightBar #education .educationTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  margin: 5px 0px 5px 0px;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .top #rightBar #education .educationTitle img.lineone {
  height: 3px;
  width: 30px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 22px;
  left: 0px;
}
.wrapper .top #rightBar #education .educationTitle img.linetwo {
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .top #rightBar #education .content {
  border-left: 2px solid #2b2b2b;
}
.wrapper .top #rightBar #education .content .item {
  margin-top: 10px;
  margin-left: 15px;
  position: relative;
}
.wrapper .top #rightBar #education .content .item img {
  position: absolute;
  left: 0;
  top: 0;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin-left: -21px;
}
.wrapper .top #rightBar #education .content .item p.institute {
  margin-bottom: 5px;
  font-weight: 600;
}
.wrapper .top #rightBar #education .content .item p.year {
  font-size: 16px;
  font-weight: 600;
  margin-top: 5px;
  margin-bottom: 10px;
}
.wrapper .top #rightBar #experence {
  margin-bottom: 30px;
}
.wrapper .top #rightBar #experence .experenceTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  margin: 5px 0px 5px 0px;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .top #rightBar #experence .experenceTitle img.lineone {
  height: 3px;
  width: 30px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 22px;
  left: 0px;
}
.wrapper .top #rightBar #experence .experenceTitle img.linetwo {
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .top #rightBar #experence .content {
  border-left: 2px solid #2b2b2b;
}
.wrapper .top #rightBar #experence .content .item {
  margin-top: 10px;
  margin-left: 15px;
  position: relative;
}
.wrapper .top #rightBar #experence .content .item img {
  position: absolute;
  left: 0;
  top: 0;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin-left: -21px;
}
.wrapper .top #rightBar #experence .content .item p.institute {
  margin-bottom: 5px;
  font-weight: 600;
}
.wrapper .top #rightBar #experence .content .item p.year {
  font-size: 16px;
  display: inline-block;
  font-weight: 600;
  margin-top: 5px;
  margin-bottom: 10px;
}
.wrapper .top #rightBar #experence .content .item:last-child p.year {
  margin-bottom: 0px !important;
}
.wrapper .top #rightBar #skill {
  margin: 10px 0px 10px 0px;
}
.wrapper .top #rightBar #skill .skillTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  margin: 5px 0px 5px 0px;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .top #rightBar #skill .skillTitle img.lineone {
  height: 3px;
  width: 30px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 22px;
  left: 0px;
}
.wrapper .top #rightBar #skill .skillTitle img.linetwo {
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .top #rightBar #skill .skill-container {
  width: 100%;
}
.wrapper .top #rightBar #skill .skill-container p {
  margin-bottom: 5px;
}
.wrapper .top #rightBar #skill .skill-container .skill {
  text-align: right;
  padding-top: 4px;
  padding-bottom: 4px;
  color: black;
  margin-bottom: 10px;
  background-color: rgb(255, 255, 255);
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  position: relative;
}
.wrapper .top #rightBar #skill .skill-container .skill span.first {
  position: absolute;
  left: 10px;
}
.wrapper .top #rightBar #skill .skill-container .skill span {
  margin-right: 10px;
  font-weight: 800;
}
.wrapper .top #rightBar #skill .html {
  width: 90%;
}
.wrapper .top #rightBar #skill .css {
  width: 80%;
}
.wrapper .top #rightBar #skill .js {
  width: 80%;
}
.wrapper .top #rightBar #skill .php {
  width: 80%;
}
.wrapper .top #rightBar #skill .laravel {
  width: 90%;
}
.wrapper .top #rightBar #skill .react {
  width: 70%;
}
.wrapper .top #rightBar #skill .css {
  width: 85%;
}
.wrapper .top #rightBar #skill .mysql {
  width: 80%;
}
.wrapper .bottom #language .languageTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .bottom #language .languageTitle img.lineone {
  height: 3px;
  width: 30px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 22px;
  left: 0px;
}
.wrapper .bottom #language .languageTitle img.linetwo {
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .bottom #language .languageImg {
  display: flex;
  flex-wrap: wrap;
}
.wrapper .bottom #language .languageImg img {
  margin-bottom: 5px;
}
.wrapper .bottom #tools .toolsTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  position: relative;
  padding-bottom: 10px;
  margin-top: 10px;
}
.wrapper .bottom #tools .toolsTitle img.lineone {
  height: 3px;
  width: 30px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 22px;
  left: 0px;
}
.wrapper .bottom #tools .toolsTitle img.linetwo {
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .bottom #tools .toolsIcon img {
  margin-bottom: 5px;
}
.wrapper .bottom #profilehandler {
  margin: 10px 0px 10px 0px;
}
.wrapper .bottom #profilehandler .handlerTitle {
  color: rgb(180, 3, 3);
  font-size: 20px;
  font-weight: 900;
  margin: 5px 0px 5px 0px;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .bottom #profilehandler .handlerTitle::before {
  content: "";
  height: 3px;
  width: 20px;
  background-color: rgb(180, 3, 3);
  position: absolute;
  top: 23px;
  left: 0px;
}
.wrapper .bottom #profilehandler .handlerTitle::after {
  content: "";
  height: 3px;
  width: 70px;
  background-color: rgb(19, 18, 18);
  position: absolute;
  top: 25px;
  left: 0px;
}
.wrapper .bottom #profilehandler .handlerAddress {
  display: flex;
  flex-wrap: wrap;
}
.wrapper .bottom #profilehandler .handlerAddress p {
  padding: 2px;
  margin: 10px 0px 10px 0px;
  display: flex;
}
.wrapper .bottom #profilehandler .handlerAddress p a {
  margin-top: -10px;
  text-decoration: none;
  background-color: #FFFFFF;
  color: black;
  padding: 5px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  border-radius: 5px;
}
.wrapper .bottom #profilehandler .handlerAddress p img {
  margin-bottom: -3px;
}

@media screen and (max-width: 600px) {
  #print {
    height: 30px;
    width: 30px;
  }
  #print img {
    height: 15px;
    width: 15px;
  }
  .wrapper .top {
    flex-direction: column;
    margin-bottom: 20px;
  }
  .wrapper .top #leftBar {
    flex: 0 0 100%;
    max-width: 100%;
    padding: 0px 10px;
  }
  .wrapper .top #rightBar {
    flex: 0 0 100%;
    max-width: 100%;
    margin-left: 0px;
    padding: 0px 20px;
  }
  .wrapper .bottom {
    padding: 0px 20px;
  }
}
    </style>
</head>
<body>
    <div class="wrapper" id="wrapper">
        <div class="top">
            <div id="leftBar">
                <div id="profile">
                    <div class="profileImage">
                        <img src="./Asset/image/msb.png" alt="">
                    </div>
                    <div class="profileTitle">
                    <h3 class="titleName">Shishir Bhuiyan</h3>
                    <h4 class="titleJob">Full Stack Web Developer</h4>
                    </div>
                </div>
                <div id="about">
                    <div class="aboutTitle">About
                        <img class="lineone" src="./Asset/icon/remove.png">
                        <img class="linetwo" src="./Asset/icon/remove.png">
                        </div>
                    <p class="aboutText">I’m Shishir and interested in doing positive things about every aspect of life. I love projects with challenges. I like working to make an impact in the real world. I always try to work for my world with my community. I learn to extend. Also, I specialize in Front-End and Back-End web Development. At the end of the day, I believe Code never lies 🏃🏾‍♂️</p>
                </div>
                <div id="contact">
                    <h3 class="contactTitle">Contact
                        <img class="lineone" src="./Asset/icon/remove.png">
                        <img class="linetwo" src="./Asset/icon/remove.png">
                    </h3>
                    <div class="address">
                        <p>Phone &nbsp; &nbsp;&nbsp;&nbsp;  : 01925696314<p>
                        <p>whatsapp &nbsp;: 01925696314 </p>
                        <p>Email   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : shishir.cse.pstu@gmail.com</p>
                    </div>
                </div>
                <div id="profilehandler">
                    <h3 class="handlerTitle">Profile
                        <img class="lineone" src="./Asset/icon/remove.png">
                        <img class="linetwo" src="./Asset/icon/remove.png">
                    </h3>
                    <div class="handlerAddress">
                        <p><a target="_blank" href="https://github.com/ShishirBhuiyan"><img src="./Asset/icon/github.svg" alt="" height="20px" width="20px">&nbsp;ShishirBhuiyan</a><p>

                        <p><a target="_blank" href="https://www.linkedin.com/in/shishirbhuiyan/"><img src="./Asset/icon/linkedin.svg" alt="" height="20px" width="20px">&nbsp;  shishirbhuiyan</a><p>

                        <p><a target="_blank" href="https://codeforces.com/profile/SHISHIR_BHUIYAN"><img src="./Asset/icon/codeforces.png" alt="" height="20px" width="20px">&nbsp;SHISHIR_BHUIYAN</a><p>

                    </div>
                </div>
            </div>
            <div id="rightBar">
                <div id="education">
                    <div class="educationTitle">Education
                        <img class="lineone" src="./Asset/icon/remove.png">
                        <img class="linetwo" src="./Asset/icon/remove.png">
                    </div>
                    <div class="content">
                        <div class="item">
                            <img src="./Asset/icon/ball.svg" alt="" height="10px" width="10px">
                            <p class="institute">Patuakhali Science & Technology University</p>
                            <p class="degree">BSC Engineering in Computer Science And Engineering</p>
                            <p class="year">2019-202#</p>
                        </div>
                        <div class="item">
                            <img src="./Asset/icon/ball.svg" alt="" height="10px" width="10px">
                            <p class="institute">Hazi Abed Ali College</p>
                            <p class="degree">Narsingdi Sadar, Narsingdi</p>
                            <p class="year">2015-2017</p>
                        </div>
                    </div>
                </div>
                <div id="experence">
                    <div class="experenceTitle">Experence
                        <img class="lineone" src="./Asset/icon/remove.png">
                        <img class="linetwo" src="./Asset/icon/remove.png">
                    </div>
                    <div class="content">
                        <div class="item">
                            <img src="./Asset/icon/ball.svg" alt="" height="10px" width="10px">
                            <p class="institute">Full Stack Web Developer</p>
                            <p class="degree">In my view, I'm much familiar with PHP, Laravel, ReactJs, and Lumen API. I already play with them for almost 3 years on many environment-friendly projects. That's it! I am happy to work efficiently, user friendly also with hardly effectively.</p>
                        </div>
                        <div class="item">
                            <img src="./Asset/icon/ball.svg" alt="" height="10px" width="10px">
                            <p class="institute">Knowledge Based Teaching</p>
                            <p class="degree">This is my pleasure when I teach someone 
                                something according to my knowledge. Besides teaching, I love to listen to others' opinions and life story also. Because I learn more from the practical situation.</p>
                        
                        </div>
                    </div>
                </div>
                <div id="skill">
                    <h3 class="skillTitle">Skills
                        <img class="lineone" src="./Asset/icon/remove.png">
                        <img class="linetwo" src="./Asset/icon/remove.png">
                    </h3>

            
                    <div class="skill-container">
                        <div class="skill js"><span class="first">Javascript</span><span>80%</span></div>
                    </div>

                    <div class="skill-container">
                        <div class="skill php"><span class="first">PHP</span><span>80%</span></div>
                    </div>
            
                    <div class="skill-container">
                        <div class="skill laravel"><span class="first">Laravel</span><span>90%</span></div>
                    </div>
            
                    <div class="skill-container">
                        <div class="skill react"><span class="first">ReactJs</span><span>70%</span></div>
                    </div>
                    <div class="skill-container">
                        <div class="skill css"><span class="first">Bootstrap,Tailwind</span><span>85%</span></div>
                    </div>
                    <div class="skill-container">
                        <div class="skill mysql"><span class="first">Mysql</span><span>80%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div id="language">
                <h3 class="languageTitle">Languages & Framework
                    <img class="lineone" src="./Asset/icon/remove.png">
                    <img class="linetwo" src="./Asset/icon/remove.png">
                </h3>
                <div class="languageImg">
                    <img src="./Asset/lang/c++.svg" alt="">&nbsp;
                    <img src="./Asset/lang/java.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/js.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/expressjs.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/php.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/nodejs.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/react.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/python.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/mysql.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/mongo.svg" alt="" >&nbsp;
                    <img src="./Asset/lang/bootstrap.svg" alt="" >&nbsp;
                </div>
            </div>
            <div id="tools">
                <h3 class="toolsTitle">Tools
                    <img class="lineone" src="./Asset/icon/remove.png">
                    <img class="linetwo" src="./Asset/icon/remove.png">
                </h3>
                <div class="toolsIcon">
                    <img src="./Asset/tools/vscode.svg" alt="" >&nbsp;
                    <img src="./Asset/tools/git.svg" alt="" >&nbsp;
                    <img src="./Asset/tools/githubdesktop.svg" alt="" >&nbsp;

                    <img src="./Asset/tools/postman.svg" alt="" >&nbsp;
                    <img src="./Asset/tools/obs.svg" alt="" >&nbsp;
                </div>
            </div>
        </div>
    </div>

</body>
</html>