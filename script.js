let tarefas = []

function adicionarTarefa() {
    
    // Variáveis

    
    let mensagem = "Tarefa adicionada com sucesso!";
    const mensagemContent = document.getElementById("mensagem")
    let inputTarefa = document.getElementById("inputTarefa") // pega a tarefa digitada
    let listaTarefas = document.getElementById("listaTarefas") // pega a lista ul criada
    let tarefa = inputTarefa.value.trim() // pega o valor de texto dela
    
    if (inputTarefa.value){

        mensagemContent.style.backgroundColor = "#c2f3ce"
        mensagemContent.style.color = "#28A745"
        mensagemContent.textContent = mensagem; // printa a mensagem definida acima

        tarefas.push(tarefa)
        renderTask(listaTarefas)
        
        inputTarefa.value = "" // reseta o valor da caixa de texto
    }
    else{

        mensagemContent.style.backgroundColor = "#ebbebc"
        mensagemContent.style.color = "#a74343"
        mensagem = "Insira uma tarefa válida!"
        mensagemContent.textContent = mensagem
    }
}
function renderTask(listaTarefas){
    listaTarefas.innerHTML = ""
    
    let i =0
    for (i;i<tarefas.length;i++){
        
        let novaTarefa = document.createElement("li") // cria um elemento com a tag il
        novaTarefa.textContent = tarefas[i]
        
        let botaoRemover = document.createElement("button")
        botaoRemover.className = "remover"
        botaoRemover.textContent = "Excluir"

        let botaoEditar = document.createElement("button")
        botaoEditar.className = "editar"
        botaoEditar.textContent = "Alterar"
        
        novaTarefa.appendChild(botaoRemover)
        novaTarefa.appendChild(botaoEditar)
        listaTarefas.appendChild(novaTarefa) // adiciona o il a ul
        clickCheck(botaoRemover,botaoEditar, i)
    }
    
}

function clickCheck(botaoRemover,botaoEditar,i){
    
    botaoRemover.addEventListener("click", function() {
        // Chama a função que você quer executar ao clicar, passando o ID
        dismissTask(i);
    });
    
    botaoEditar.addEventListener("click", function() {
        // Chama a função que você quer executar ao clicar, passando o ID
        editTask(i);
    });
}
function dismissTask(taskIndex){
    
    const mensagemContent = document.getElementById("mensagem")
    mensagemContent.style.backgroundColor = "#c2f3ce"
    mensagemContent.style.color = "#28A745"
    
    let mensagem = "Tarefa removida com sucesso!"
    tarefas.splice(taskIndex,1)
    mensagemContent.textContent = mensagem  

    let listaTarefas = document.getElementById("listaTarefas")
    renderTask(listaTarefas)
}
function editTask(taskIndex){
    
    let editedTask = prompt("Edite a tarefa")
    tarefas[taskIndex] = editedTask

    let listaTarefas = document.getElementById("listaTarefas")
    renderTask(listaTarefas)
    
}
