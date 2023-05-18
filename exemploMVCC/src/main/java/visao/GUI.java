/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package visao;

/**
 *
 * @author jsda2
 */
import controle.Controle;
import javax.swing.*;

import java.awt.*;
import java.awt.event.*;

public class GUI extends javax.swing.JFrame {
    JFrame frame;
    JButton listar;
    JButton cadastrar;
    JButton excluir;
    JButton remover;
    JTextField nome;
    JTextField email;
    JLabel digiteNome;
    JLabel digiteEmail;
    JLabel lblRemover;
    Object v[] = new Object[3];
    Controle controle;

    public void iniciar() {
        frame = new JFrame("Cadastro de Contatos");
        listar = new JButton("Listar");
        cadastrar = new JButton("Cadastrar");
        excluir = new JButton("Limpar");
        remover = new JButton("Remover");
        nome = new JTextField();
        email = new JTextField();
        digiteNome = new JLabel("Digite o nome");
        digiteEmail = new JLabel("Digite o email");
        lblRemover = new JLabel("Remover Contato");

        frame.setTitle("Cadastro de Contatos");
        frame.setLayout(null);
        frame.setBounds(300, 300, 400, 250);
        cadastrar.setBounds(70, 120, 120, 25);
        cadastrar.setBackground(Color.yellow);
        listar.setBounds(200, 120, 120, 25);
        excluir.setBounds(70, 160, 120, 25);
        excluir.setBackground(Color.pink);
        digiteNome.setBounds(70, 10, 120, 25);
        nome.setBounds(70, 30, 250, 25);
        digiteEmail.setBounds(70, 60, 120, 25);
        email.setBounds(70, 80, 250, 25);

        frame.add(cadastrar);
        frame.add(listar);
        frame.add(excluir);
        frame.add(digiteNome);
        frame.add(nome);
        frame.add(digiteEmail);
        frame.add(email);
        frame.add(lblRemover);
        frame.add(remover);

        frame.setLocationRelativeTo(null);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setVisible(true);

        apagar();
        cadastrar();
        listar();
        controle = new Controle();
    }

    // private void cadastrar() {
    // cadastrar.addActionListener(new ActionListener() {
    // @Override
    // public void actionPerformed(java.awt.event.ActionEvent evt) {
    // v[0] = nome.getText();
    // v[1] = email.getText();
    // v[2] = "Cadastrar";
    // nome.setText("");
    // email.setText("");
    // }
    // });
    // }

    private void apagar() {
        excluir.addActionListener(new java.awt.event.ActionListener() {
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                limpar();
            }
        });
    }

    private void cadastrar() {
        cadastrar.addActionListener(new java.awt.event.ActionListener() {
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                v[0] = nome.getText();
                v[1] = email.getText();
                v[2] = "cadastrar";
                controle.requisitar(v);
                JOptionPane.showMessageDialog(frame, "Cadastrado!", "SUCESSO",
                        JOptionPane.INFORMATION_MESSAGE);
                limpar();
            }
        });
    }

    private void listar() {
        listar.addActionListener(new java.awt.event.ActionListener() {
            @Override
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                v[2] = "listar";
                controle.requisitar(v);
            }
        });
    }

    private void limpar() {
        nome.setText("");
        email.setText("");
        nome.grabFocus();
    }

    public static void main(String[] args) {
        GUI gui = new GUI();
        gui.iniciar();
    }
}