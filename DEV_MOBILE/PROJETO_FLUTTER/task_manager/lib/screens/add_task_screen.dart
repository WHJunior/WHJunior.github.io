import 'package:flutter/material.dart';
import '../models/task.dart';

class AddTaskScreen extends StatelessWidget {
  final Task? task;

  AddTaskScreen({this.task});

  final TextEditingController _controller = TextEditingController();

  @override
  Widget build(BuildContext context) {
    if (task != null) {
      _controller.text = task!.title;
    }

    return Scaffold(
      appBar: AppBar(
        title: Text(task == null ? 'Adicionar Tarefa' : 'Editar Tarefa'),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          children: [
            TextField(
              controller: _controller,
              decoration: InputDecoration(labelText: 'Título Tarefa'),
            ),
            SizedBox(height: 20),
            ElevatedButton(
              onPressed: () {
                final taskTitle = _controller.text.trim();
                if (taskTitle.isNotEmpty) {
                  Navigator.pop(context, taskTitle);
                }
              },
              child: Text(task == null ? 'Adicionar Tarefa' : 'Salvar Alterações'),
            ),
          ],
        ),
      ),
    );
  }
}
