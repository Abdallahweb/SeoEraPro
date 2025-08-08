

  SeoEra Company Project Task 

  This project is a CRUD (Create, Read, Update, Delete) application built using the Laravel framework. It allows admins and   users to manage posts and users via their respective dashboards.

  Models >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  User: Contains id, name, email, mobile, usertype (with a default value of 'user'), and password fields.

  Post: Contains id, title, description, mobile, and user_id (which references the id on the users table).

  -----------------------------------------------------------------------------------
 

  Controllers >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  AddUsersController: Manages users (show, add, edit, and delete).

  PostController: Manages posts (view, add, edit, and delete).

  PostsApiController: Retrieves post data via an API.

  -----------------------------------------------------------------------------------

  The Relationships >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  User model has a relationship with the Post model.
  The User model includes a post() function to retrieve a user's posts.

  -----------------------------------------------------------------------------------

  Middleware >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  Admin Middleware: Checks if the usertype field in the users table belongs to a page visitor, a regular user, or an admin.

  CheckPasswordApi Middleware: Handles API logins using a mobile number and password.

  -----------------------------------------------------------------------------------

  Factory / Seeders >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  The project includes seeders to generate 10 fake users and 10 fake posts.

  -----------------------------------------------------------------------------------

  Public Pages >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
 
  http://127.0.0.1:8000/: This page displays the latest posts, including the post's title, a description (512 characters),   and a link to the author's page.

  http://127.0.0.1:8000/author/{id}: This page displays the latest posts by a specific author, identified by their ID.

  -----------------------------------------------------------------------------------

  User/Admin Dashboard Pages (Login Required) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  http://127.0.0.1:8000/view_posts: This page displays the latest posts created by the logged-in user and allows them to   add new posts.

  http://127.0.0.1:8000/edit_post/{id}: This page allows a user to edit their own posts.

  -----------------------------------------------------------------------------------

  Admin-Only Dashboard Pages >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  http://127.0.0.1:8000/view_users: This page displays all users (excluding admin data) and allows the admin to add new   users.

  http://127.0.0.1:8000/edit_user/{id}: This page allows an admin to edit a user's data.

  -----------------------------------------------------------------------------------

  API Endpoint >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  GET / http://127.0.0.1:8000/api/posts/: A GET request to this endpoint retrieves post data.

  -----------------------------------------------------------------------------------
