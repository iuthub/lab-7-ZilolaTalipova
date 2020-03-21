CREATE TABLE users(
    id int(11) AUTO_INCREAMENT PRIMARY KEY not null,
    username varchar(250) not null,
    email varchar(250) not null,
    password varchar(250) not null,
    fullname varchar(250) not null,
    dob date not null

);

CREATE TABLE posts (
  id int(11) AUTO_INCREAMENT PRIMARY KEY not null,
   title varchar(250) not null,
  body text not null,
  publishDate date not null,
  FOREIGN KEY(userId) REFERENCES users(id)
);
INSERT INTO  users (username, fullname, email, password)
        VALUES ('$username', '$fullname', '$email', '$pwd');
