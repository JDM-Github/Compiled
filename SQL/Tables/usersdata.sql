USE admin_db;
DROP TABLE resume;

CREATE TABLE resume (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    birth_date DATE NOT NULL,
    address VARCHAR(255) NOT NULL,
    sex ENUM('Male', 'Female') NOT NULL,
    employment_status ENUM('Yes', 'No') NOT NULL,
    education VARCHAR(255) NOT NULL,
    objectives TEXT NOT NULL,
    description TEXT NOT NULL,
    profile_image_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE skills (
    skill_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    skill_name VARCHAR(255) NOT NULL
);
