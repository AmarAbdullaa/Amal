<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create an Event</title>
  <style>
    /* styles.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
}



.logo img {
  max-height:70px;
widows: auto;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 30px;
justify-content: flex-start;
padding: 0;
margin: 0;
}

nav{
flex-grow: 1;
}

nav a {
  color: white;
  text-decoration: none;
  font-size: 18px;
  padding: 5px 10px;
}

nav a.active {
color:white;
font-weight: bold;

}

.bell-icon, .profile-icon {
  cursor: pointer;
  justify-content: flex-end;

  
}

.bell-icon {
  background-color: transparent;
  border: none;
  font-size: 30px;
  color: #7f7f7f;
}
.bell-icon :hover{
  color: white;
}
.profile-icon img {
  height: 35px;
  border-radius: 50%;
  transition: border 0.3s ease;
}

.profile-icon img:hover {
  border: 2px solid #A87BBE;
}
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 20px;
  background-color: #fff;
  border-bottom: 1px solid #ddd;
}

.logo {
  font-weight: bold;
  font-size: 1.2em;
}

.navbar nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  gap: 20px;
}

.navbar nav ul li a {
  text-decoration: none;
  color: #333;
  font-size: 1em;
}

.profile {
  display: flex;
  align-items: center;
  gap: 15px;
}

.notification-icon {
  font-size: 1.2em;
}

.profile-picture {
  width: 35px;
  height: 35px;
  border-radius: 50%;
}

.form-container {
  max-width: 100;
  margin:  auto;
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  margin-left: 220px;
  background-color: #D8BFD8;
}

.form-container h1 {
  margin-bottom: 20px;
  font-size: 1.8em;
}

.form-container form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

label {
  font-size: 1em;
  font-weight: bold;
}

input, textarea, button {
  font-size: 1em;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  outline: none;
}

textarea {
  resize: none;
}

button {
  background-color: #4B0082;
  color: #fff;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #9370DB;
}

  </style>
</head>
<body>
  
  <main>

  <?php include 'nav.php'; ?>

    
      <div class="dropdown-menu" id="dropdownMenu">
          <!-- <ul>
              <li><a href="#"><i class="uil uil-user"></i> My Profile</a></li>
              <li><a href="#"><i class="uil uil-signout"></i> Log out</a></li>
          </ul> -->
      </div>
  </header>
    <section class="form-container">
      <h1>Create an Event</h1>
      <form action="#" method="POST">
        <label for="event-name">Event name</label>
        <input type="text" id="event-name" name="event-name" placeholder="Enter event name" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Enter description"></textarea>

        <label for="location">Location</label>
        <input type="text" id="location" name="location" placeholder="Enter location" required>

        <label for="start-time">Start time</label>
        <input type="datetime-local" id="start-time" name="start-time" required>

        <label for="end-time">End time</label>
        <input type="datetime-local" id="end-time" name="end-time" required>

        <button type="submit">Submit</button>
      </form>
    </section>
  </main>

 
</body>
</html>
