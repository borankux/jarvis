# Jaravis
### About
Personal digital planner

### Database
- user
    - id
    - name
    - password
    - email

- project
    - title
    - icon
    - readme
    - deadline

- task
    - title
    - readme
    - deadline
    - project_id

- list
    - id
    - name

### APIs

/auth/register
    - post
    
/auth/login
    - post

/auth/logout
    - post

/user/profile
    - get

/project
    - get
    - post
    - put
    - delete
    
/task
    - get
    - post
    - put
    - delete
    
/list
    - get
    - post
    - put
    - delete