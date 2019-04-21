
<h2>Register</h2>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
<div>
    <p>
        <input class="w3-input" type="text" name="firstName" pattern=^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$ title="First Name" required autofocus>
        <label>First Name</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="lastName" pattern=^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$ title="Last Name" required>
        <label>Last Name</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="username" pattern=^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$ title="Your username must be at least 3 characters, begin with a letter, and may not contain special characters" required>
        <label>Username</label>
    </p>
    <p>
        <input class="w3-input" type="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,20}$" title="Password must be at least 4 characters and must include at least one upper case letter, one lower case letter, and one number." required>
        <label>Password</label>
    </p>
    
    <p>
        <input class="w3-input" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        <label>E-mail</label>
    </p>
    
            <p>
        <input class="w3-input" type="integer" name="phoneNumber" required>
        <label>Phone Number</label>
    </p>
    
            <p> Would you like to be a:
        <input class="w3-input" type="radio" name="userTypeID" value="blogger">
        <label>Blogger</label><br>
        Or
        <input class="w3-input" type="radio" name="userTypeID" value="subscriber" checked>
        <label>Subscriber</label>
    </p>
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader"/>
  <p>
    <input type="submit" value="Add User">
  </p>
</div>
</form>