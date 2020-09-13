import org.w3c.dom.*;
import javax.xml.parsers.*;
import java.io.*;
public class Parser {

	public static void main(String[] args) {
		
		try {
	    	
	         DocumentBuilderFactory dbFactory = DocumentBuilderFactory.newInstance();
	         DocumentBuilder dBuilder = dbFactory.newDocumentBuilder();
	         Document doc = dBuilder.parse("file:///home/vyshali/Desktop/WT/experiment3/WebContent/userdetails.xml");
	         BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
	         System.out.println("Enter User Id: ");
	         String id = br.readLine();
	         NodeList nList = doc.getElementsByTagName("user");
	               
	         for (int temp = 0; temp < nList.getLength(); temp++) {
	            Node nNode = nList.item(temp);
	            
	            if (nNode.getNodeType() == Node.ELEMENT_NODE) {
	               Element eElement = (Element) nNode;
	               if(eElement.getAttribute("id").equals(id)){
		               System.out.println("User  Id   : "+ eElement.getAttribute("id"));
		               System.out.println("First Name : " + eElement.getElementsByTagName("firstName").item(0).getTextContent());
		               System.out.println("Last  Name : " + eElement.getElementsByTagName("lastName").item(0).getTextContent());
		               System.out.println("Location   : "+ eElement.getElementsByTagName("location").item(0).getTextContent());
		               System.out.println("MobileNo   : "+ eElement.getElementsByTagName("mobile").item(0).getTextContent());
		              
	               }
	            }
	         }
	      } catch (Exception e) {
	         e.printStackTrace();
	      }
	   }

	}


