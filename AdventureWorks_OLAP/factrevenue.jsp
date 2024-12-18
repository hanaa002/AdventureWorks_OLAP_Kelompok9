<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/aw_wh?user=root&password=" catalogUri="/WEB-INF/queries/factrevenue.xml">

SELECT NON EMPTY {[Measures].[Revenue]} ON COLUMNS,
  NON EMPTY {([Customer].[All Customer], [Time].[All Times], [Product].[All Product],[Ship],[Special Offer])} ON ROWS
FROM [revenue]


</jp:mondrianQuery>





<c:set var="title01" scope="session">AdventureWorks Fact Revenue OLAP</c:set>
