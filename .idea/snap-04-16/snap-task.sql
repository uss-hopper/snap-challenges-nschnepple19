create table task (
taskId binary(20) not null,
taskTitle varchar(255) not null,
taskStartDate datetime not null,
taskDueDate datetime not null,
taskStatus varchar(64) not null,
taskPriority varchar(64) not null,
taskDescription varchar(256) not null,
	index(taskId),
	primary key(taskId)
);