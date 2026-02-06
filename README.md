TASK MANAGER API

A simple REST API built with symfony and API Platform
Allows creating, updating, and completing tasks

***Setup Instructions**
1. Clone the respository
2. Copy environment file
3. Start Docker containers
4. Run migrations

***API Endpoints**
 - /api 
 - POST - create new task
 - GET - list all tasks
 - PUT/PATCH - update a task

***Usage Example**
1. Create a Task
POST /api/tasks with JSON:
{
  "title": "Finish API project",
  "description": "Complete all CRUD operations"
}

2. Update a Task
PATCH /api/tasks/{id} with JSON:
{
  "description": "Updated task description"
}

3. Mark a Task as Completed
PATCH /api/tasks/{id}/complete
Response:

{
  "completed": "true"
}

**NOTES**
Database: task_manager_api
User: task_manager_user
Password: task_manager_password

**Author**
Rex John T. Cabanag, Task Manager API Activity
