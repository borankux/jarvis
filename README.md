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
    - status    
    - deadline

- task
    - title
    - readme
    - deadline
    - status
    - project_id

- list
    - id
    - name

### APIs

- `/auth/register`
    - post
    
- `/auth/login`
    - post

- `/auth/logout`
    - post

- `/user/profile`
    - get

- `/project`
    - get
    - post
    - put
    - delete
    
- `/task`
    - get
    - post
    - put
    - delete
    
- `/list`
    - get
    - post
    - put
    - delete

### Todo 
- [ ] add label module
    - [ ] model
    - [ ] controller
    - [ ] routes
    - [ ] service