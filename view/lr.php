<body>
    <div class="half left">
        <div class="outer">
        <div class="middle">
          <div class="inner">
            <form method="post" action="?page=login">
            <h1 class="firstLetter">L</h1><h1 class="finishLetter">ogin</h1>
            <br>
            <input type="text" name="username" placeholder="Username" />
            <br>
            <input type="password" name="password" placeholder="Password"/>
            <br>
            <input type="submit" name="submit" value="Login" class="submit" />
            </form>
            <br>
            <p class="forgot"><a>Forgot Password?</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="half right">
        <div class="outer">
            <div class="middle">
              <form class="inner" method="post" action="?page=registered">
                <h1 class="firstLetter">R</h1><h1 class="finishLetter">egister</h1>
                <br>
                <input type="text" name="username" placeholder="Username" required/>
                <br>
                <input type="email" name="email" placeholder="E-mail" required/>
                <br>
                <input type="password" name="password" placeholder="Password" required/>
                <br>
                <input type="submit" name="submit" value="Register" class="submit" />
              </form>
            </div>
        </div>
    </div>
</body>