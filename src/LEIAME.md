ESTRUTURA DOS DIRETÓRIOS DO PROJETO
===================================

SRC\\  
 ├ Assets\  
 │ &nbsp;&nbsp; ├ Admin\  
 │ &nbsp;&nbsp; │ &nbsp;&nbsp;&nbsp; ├ CSS\  
 │ &nbsp;&nbsp; │ &nbsp;&nbsp;&nbsp; ├ JS\  
 │ &nbsp;&nbsp; │ &nbsp;&nbsp;&nbsp; ├ Images\  
 │ &nbsp;&nbsp; ├ Alunos/Pais\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ CSS\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ JS\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ Images\\  
 │ &nbsp;&nbsp; ├ Funcionários\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ CSS\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ JS\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ Images\  
 │ &nbsp;&nbsp; │  
 │ &nbsp;&nbsp; ├ Professores\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ CSS\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ JS\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ Images\\  
 │ &nbsp;&nbsp; │  
 │ &nbsp;&nbsp; ├ Global\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ CSS\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ JS\  
 │ &nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ Images\  
 │\\  
 ├ Scripts\  
 │ &nbsp;&nbsp; ├ Database\  
 │ &nbsp;&nbsp; │&nbsp;&nbsp;&nbsp; └ (Aqui vai arquivos PHP para conexão e etc)  
 │ &nbsp;&nbsp; ├ Login\  
 │ &nbsp;&nbsp; │&nbsp;&nbsp;&nbsp; └ (Aqui vai arquivos PHP para controle de rotas do login)\  
 │ &nbsp;&nbsp; └ Manipulations\  
 |  
 |  
 │ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ Admin\  
 │ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ (Aqui organizaremos cada tipo de manipulação em uma pasta diferente, exemplo, todos os PHP's que forem para gerenciar escolas, será na pasta Escolas, todos os PHP's para Alunos, na pasta alunos e etc)\  
 |  
 │ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ├ Alunos/Pais\  
 │ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ (Aqui será a mesma coisa, uma pasta para cada 'página' do usuário, no caso para alunos/pais, haverá poucas pastas, pois serão poucas as coisas que eles poderão criar & editar, sendo apenas visualização)  
 | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |  
 │ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├ Professores\  
 │ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ (Mesma coisa)\  
 │ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ Funcionarios\  
 │ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; └ (Mesma coisa)\  
 │  
 │  
 │  
 └ Pages\  
 &nbsp;&nbsp;&nbsp;&nbsp; ├ Admin\  
 &nbsp;&nbsp;&nbsp;&nbsp; ├ Professor\  
 &nbsp;&nbsp;&nbsp;&nbsp; ├ Secretaria\  
 &nbsp;&nbsp;&nbsp;&nbsp; └ Aluno
