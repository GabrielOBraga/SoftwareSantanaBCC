# 👓 Sistema de Gestão - Ótica Santana

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Status](https://img.shields.io/badge/Status-Concluído-success?style=for-the-badge)

> Projeto desenvolvido durante o curso de Bacharelado em Ciências da Computação.

## 📋 Sobre o Projeto

O **SoftwareSantana** é uma solução web completa desenvolvida para gerenciar as operações diárias de uma ótica. O sistema foi projetado para resolver gargalos no controle de estoque específico do setor (armações, lentes, peças) e agilizar o atendimento ao cliente no balcão através de uma interface mobile-first.

O foco principal foi criar um fluxo de trabalho eficiente, desde a chegada do produto no estoque (com geração de etiquetas) até a venda final e controle financeiro.

---

## 🚀 Funcionalidades Principais

### 📦 Gestão de Estoque Especializado
- Controle detalhado de **armações, lentes e acessórios** de limpeza/manutenção.
- Categorização inteligente para rápida localização de itens.

### 📱 Frente de Caixa (POS) & Orçamentos
- **Interface Mobile Intuitiva:** Projetada para que o vendedor possa realizar orçamentos e vendas circulando pela loja com um tablet ou celular, ao lado do cliente.
- Conversão rápida de orçamentos em vendas efetivas.

### 🏷️ Gerador de Código de Barras
- Módulo nativo para criação e impressão de códigos de barras personalizados para armações, facilitando a etiquetagem e leitura no caixa.

### 📊 Dashboard & Metas
- Painel administrativo para proprietários e gerentes.
- Acompanhamento de vendas em tempo real com filtros (período, vendedor, tipo de produto).
- **Sistema de Metas:** Definição e visualização de progresso de metas de vendas para a equipe.

### 💰 Módulo Financeiro
- Controle básico de Contas a Pagar e Receber.
- Fluxo de caixa integrado às vendas.

---

## 📸 Screenshots

| Dashboard Administrativo | Frente de Caixa (Mobile) |
|:------------------------:|:------------------------:|
| <img src="./screenshots/dashboard.png" width="400"> | <img src="./screenshots/mobile_pos.png" width="200"> |

| Controle de Estoque | Gerador de Etiquetas |
|:-------------------:|:--------------------:|
| <img src="./screenshots/estoque.png" width="400"> | <img src="./screenshots/etiquetas.png" width="400"> |

---

## 🛠️ Tecnologias Utilizadas

- **Back-end:** PHP (Estruturado/MVC)
- **Front-end:** HTML5, CSS3, JavaScript (Vanilla)
- **Banco de Dados:** MySQL (Requer importação do script SQL)
- **Bibliotecas:** [Inserir aqui se usou alguma lib para gerar PDF ou código de barras, ex: TCPDF, FPDF]

---

## ⚙️ Como Executar o Projeto

### Pré-requisitos
- Servidor local (XAMPP, WAMP ou Docker) com PHP e MySQL.

### Instalação

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/GabrielOBraga/SoftwareSantanaBCC.git](https://github.com/GabrielOBraga/SoftwareSantanaBCC.git)
