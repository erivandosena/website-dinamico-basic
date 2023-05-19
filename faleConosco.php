		
		<div id="contato">
			<form  method="post" action="enviaEmail.php" name="formContato">
				<label for="nome">Nome:</label>
				<br />
				<input type="text" name="nome" id="nome" maxlength="50" size="35" />
				<br />
				<label for="email">E-mail:</label>
				<br />
				<input type="text" name="email" id="email" maxlength="100" size="35" />
				<br />
				<label for="telefone">Telefone:</label>
				<br />
				<input type="text" name="telefone" id="telefone" maxlength="20" size="19" />
				<br />
				<label for="estado">UF Estado:</label>
				<br />
				<select name="estado" id="estado">
					<option value="">- - - - Selecione - - - -</option>
					<option value="Acre">AC</option>
					<option value="Alagoas">AL</option>
					<option value="Amapá">AP</option>
					<option value="Amazonas">AM</option>
					<option value="Bahia">BA</option>
					<option value="Ceará">CE</option>
					<option value="Distrito Federal">DF</option>
					<option value="Espírito Santo">ES</option>
					<option value="Goiás">GO</option>
					<option value="Maranhão">MA</option>
					<option value="Mato Grosso">MT</option>
					<option value="Mato Grosso do Sul">MS</option>
					<option value="Minas Gerais">MG</option>
					<option value="Pará">PA</option>
					<option value="Paraiba">PB</option>
					<option value="Paraná">PR</option>
					<option value="Pernambuco">PE</option>
					<option value="Piauí">PI</option>
					<option value="Rio de Janeiro">RJ</option>
					<option value="Rio Grande do Norte">RN</option>
					<option value="Rio Grande do Sul">RS</option>
					<option value="Rondônia">RO</option>
					<option value="Roraima">RR</option>
					<option value="Santa Catarina">SC</option>
					<option value="São Paulo">SP</option>
					<option value="Sergipe">SE</option>
					<option value="Tocantins">TO</option>
				</select>
				<br />
				<label for="mensagem">Mensagem:</label>
				<br />
				<textarea name="mensagem" id="mensagem"  rows="5" cols="26" ></textarea>
				<br /><br />
				<input  name="enviar" id="enviar" type="submit" value="Enviar"/>
			</form>
		</div>
