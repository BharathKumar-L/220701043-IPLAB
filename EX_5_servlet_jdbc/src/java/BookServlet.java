/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 *
 * @author lbhar
 */
@WebServlet("/BookServlet")
public class BookServlet extends HttpServlet {

    private static final long serialVersionUID = 1L;

    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        String action = request.getParameter("action");

        switch (action) {
            case "add":
                addBook(request, response);
                break;
            case "edit":
                editBook(request, response);
                break;
            case "display":
                displayBooks(request,response);
                break;
            case "delete":
                deleteBook(request, response);
                break;
            default:
                response.getWriter().println("Unknown action!");
                break;
        }
    }

    private void addBook(HttpServletRequest request, HttpServletResponse response) throws IOException {
        HttpSession session = request.getSession(false);
        if (session == null || session.getAttribute("username") == null) {
            response.sendRedirect("login.html"); // Redirect to login page if not logged in
            return;
        }
        String bookName = request.getParameter("book_name");
        String author = request.getParameter("author");
        String publisher = request.getParameter("publisher");
        String edition = request.getParameter("edition");
        String price = request.getParameter("price");
        String category = request.getParameter("category");

        Connection conn = null;
        PreparedStatement stmt = null;

        PrintWriter out = response.getWriter();
        response.setContentType("text/html");

        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/?user=root&password=Bhk@2005/");
            createDatabaseAndTable(conn);
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/LibraryDB", "root", "Bhk@2005/");

            String sql = "INSERT INTO BOOK (TITLE, AUTHOR, PUBLISHER, EDITION, PRICE, CATEGORY) VALUES (?, ?, ?, ?, ?, ?)";
            stmt = conn.prepareStatement(sql);
            stmt.setString(1, bookName);
            stmt.setString(2, author);
            stmt.setString(3, publisher);
            stmt.setString(4, edition);
            stmt.setString(5, price);
            stmt.setString(6, category);

            stmt.executeUpdate();
            out.println("<html><body>");
            out.println("<script type='text/javascript'>");
            out.println("alert('Book added: " + bookName + " by " + author + "');");
            out.println("window.location.href = 'home.html';"); // Redirect to index page after alert
            out.println("</script>");
            out.println("</body></html>");

        } catch (SQLException | ClassNotFoundException e) {
            e.printStackTrace();
            response.getWriter().println("Error adding book: " + e.getMessage());
        } finally {
            try {
                if (stmt != null) {
                    stmt.close();
                }
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    private void editBook(HttpServletRequest request, HttpServletResponse response) throws IOException {
        HttpSession session = request.getSession(false);
        if (session == null || session.getAttribute("username") == null) {
            response.sendRedirect("login.html"); // Redirect to login page if not logged in
            return;
        }
        int accno = Integer.parseInt(request.getParameter("accno"));
        String bookName = request.getParameter("book_name");
        String author = request.getParameter("author");
        String publisher = request.getParameter("publisher");
        String edition = request.getParameter("edition");
        String price = request.getParameter("price");
        String category = request.getParameter("category");

        Connection conn = null;
        PreparedStatement stmt = null;

        PrintWriter out = response.getWriter();
        response.setContentType("text/html");

        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/LibraryDB", "root", "Bhk@2005/");
            String sql = "UPDATE BOOK SET TITLE=?, AUTHOR=?, PUBLISHER=?, EDITION=?, PRICE=?, CATEGORY=? WHERE ACCNO=?";
            stmt = conn.prepareStatement(sql);
            stmt.setString(1, bookName);
            stmt.setString(2, author);
            stmt.setString(3, publisher);
            stmt.setString(4, edition);
            stmt.setString(5, price);
            stmt.setString(6, category);
            stmt.setInt(7, accno);

            stmt.executeUpdate();
            out.println("<html><body>");
            out.println("<script type='text/javascript'>");
            out.println("alert('Book Accno: " + accno + " updated successfully!!');");
            out.println("window.location.href = 'home.html';"); // Redirect to index page after alert
            out.println("</script>");
            out.println("</body></html>");

        } catch (SQLException | ClassNotFoundException e) {
            e.printStackTrace();
            response.getWriter().println("Error updating book: " + e.getMessage());
        } finally {
            try {
                if (stmt != null) {
                    stmt.close();
                }
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    private void displayBooks(HttpServletRequest request, HttpServletResponse response) throws IOException {
        HttpSession session = request.getSession(false);
        if (session == null || session.getAttribute("username") == null) {
            response.sendRedirect("login.html"); // Redirect to login page if not logged in
            return;
        }

        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/LibraryDB", "root", "Bhk@2005/");
            Statement stmt = conn.createStatement();
            ResultSet rs = stmt.executeQuery("SELECT * FROM BOOK");

            out.println("<table border='1'>");
            out.println("<tr><th>Acc No</th><th>Title</th><th>Author</th><th>Publisher</th><th>Edition</th><th>Price</th><th>Category</th></tr>");

            while (rs.next()) {
                out.println("<tr><td>" + rs.getInt("ACCNO") + "</td><td>"
                        + rs.getString("TITLE") + "</td><td>"
                        + rs.getString("AUTHOR") + "</td><td>"
                        + rs.getString("PUBLISHER") + "</td><td>"
                        + rs.getString("EDITION") + "</td><td>"
                        + rs.getDouble("PRICE") + "</td><td>"
                        + rs.getString("CATEGORY") + "</td></tr>");
            }
            out.println("</table>");

            rs.close();
            stmt.close();
            conn.close();
        } catch (Exception e) {
            e.printStackTrace();
            out.println("Error displaying books: " + e.getMessage());
        }
    }

    private void deleteBook(HttpServletRequest request, HttpServletResponse response) throws IOException {
        HttpSession session = request.getSession(false);
        if (session == null || session.getAttribute("username") == null) {
            response.sendRedirect("login.html"); // Redirect to login page if not logged in
            return;
        }
        int accno = Integer.parseInt(request.getParameter("accno"));

        Connection conn = null;
        PreparedStatement stmt = null;

        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/LibraryDB", "root", "Bhk@2005/");
            String sql = "DELETE FROM BOOK WHERE ACCNO=?";
            stmt = conn.prepareStatement(sql);
            stmt.setInt(1, accno);

            int rowsAffected = stmt.executeUpdate();
            if (rowsAffected > 0) {
                response.getWriter().println("Book deleted successfully!");
            } else {
                response.getWriter().println("No book found with the provided AccNo.");
            }

        } catch (SQLException | ClassNotFoundException e) {
            e.printStackTrace();
            response.getWriter().println("Error deleting book: " + e.getMessage());
        } finally {
            try {
                if (stmt != null) {
                    stmt.close();
                }
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    private void createDatabaseAndTable(Connection conn) throws SQLException {
        Statement stmt = null;
        try {
            stmt = conn.createStatement();
            stmt.executeUpdate("CREATE DATABASE IF NOT EXISTS LibraryDB");
            stmt.executeUpdate("USE LibraryDB");

            String createBookTableSQL = "CREATE TABLE IF NOT EXISTS BOOK ("
                    + "ACCNO INT PRIMARY KEY AUTO_INCREMENT, "
                    + "TITLE VARCHAR(255), "
                    + "AUTHOR VARCHAR(255), "
                    + "PUBLISHER VARCHAR(255), "
                    + "EDITION VARCHAR(50), "
                    + "PRICE DECIMAL(10, 2), "
                    + "CATEGORY VARCHAR(100))";
            stmt.executeUpdate(createBookTableSQL);

        } finally {
            if (stmt != null) {
                stmt.close();
            }
        }
    }
}
