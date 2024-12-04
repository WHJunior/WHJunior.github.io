import 'package:flutter/material.dart';
import '../models/task.dart';
import '../services/local_storage.dart';
import 'add_task_screen.dart';

class HomeScreen extends StatefulWidget {
  @override
  _HomeScreenState createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  final LocalStorage _localStorage = LocalStorage();
  List<Task> _tasks = [];

  @override
  void initState() {
    super.initState();
    _loadTasks();
  }

  Future<void> _loadTasks() async {
    final tasks = await _localStorage.getTasks();
    setState(() {
      _tasks = tasks;
    });
  }

  void _saveTasks() {
    _localStorage.saveTasks(_tasks);
  }

  void _toggleTaskCompletion(Task task) {
    setState(() {
      task.isCompleted = !task.isCompleted;
    });
    _saveTasks();
  }

  void _addTask(Task task) {
    setState(() {
      _tasks.add(task);
    });
    _saveTasks();
  }

  void _editTask(Task task, String newTitle) {
    setState(() {
      task.title = newTitle;
    });
    _saveTasks();
  }

  void _deleteTask(Task task) {
    setState(() {
      _tasks.remove(task);
    });
    _saveTasks();
  }

  void _clearCompletedTasks() {
    setState(() {
      _tasks.removeWhere((task) => task.isCompleted);
    });
    _saveTasks();
  }

  void _sortTasks({bool byStatus = false}) {
    setState(() {
      if (byStatus) {
        _tasks.sort((a, b) => a.isCompleted ? 1 : -1);
      } else {
        _tasks.sort((a, b) => a.title.compareTo(b.title));
      }
    });
    _saveTasks();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Gerenciador de Tarefas'),
        actions: [
          IconButton(
            icon: Icon(Icons.sort_by_alpha),
            onPressed: () => _sortTasks(byStatus: false),
          ),
          IconButton(
            icon: Icon(Icons.sort),
            onPressed: () => _sortTasks(byStatus: true),
          ),
          IconButton(
            icon: Icon(Icons.delete_sweep),
            onPressed: _clearCompletedTasks,
          ),
        ],
      ),
      body: ListView.builder(
        itemCount: _tasks.length,
        itemBuilder: (context, index) {
          final task = _tasks[index];
          return ListTile(
            title: Text(
              task.title,
              style: TextStyle(
                decoration: task.isCompleted
                    ? TextDecoration.lineThrough
                    : TextDecoration.none,
              ),
            ),
            leading: Checkbox(
              value: task.isCompleted,
              onChanged: (value) => _toggleTaskCompletion(task),
            ),
            trailing: Row(
              mainAxisSize: MainAxisSize.min,
              children: [
                IconButton(
                  icon: Icon(Icons.edit),
                  onPressed: () async {
                    final newTitle = await Navigator.push(
                      context,
                      MaterialPageRoute(
                        builder: (_) => AddTaskScreen(task: task),
                      ),
                    );
                    if (newTitle != null) _editTask(task, newTitle);
                  },
                ),
                IconButton(
                  icon: Icon(Icons.delete),
                  onPressed: () => _deleteTask(task),
                ),
              ],
            ),
          );
        },
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: () async {
          final newTaskTitle = await Navigator.push(
            context,
            MaterialPageRoute(builder: (_) => AddTaskScreen()),
          );

          if (newTaskTitle != null && newTaskTitle is String) {
            _addTask(Task(title: newTaskTitle));
          }
        },
        child: Icon(Icons.add),
      ),
    );
  }
}
