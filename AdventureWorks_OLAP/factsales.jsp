<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/aw_wh?user=root&password=" catalogUri="/WEB-INF/queries/salesfakta.xml">

SELECT NON EMPTY {[Measures].[Order Quantity], [Measures].[Amount]} ON COLUMNS,
  NON EMPTY {([Customer].[All Customer], [Time].[All Times], [Product].[All Product],[Ship],[Special Offer])} ON ROWS
FROM [sales]


</jp:mondrianQuery>





<c:set var="title01" scope="session">AdventureWorks Fact Sales OLAP</c:set>
