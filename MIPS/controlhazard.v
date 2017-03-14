module controlhazard
(
	input clk,
	input branchorjump,
	input start,
	input [4:0] id_rs,
	input [4:0] id_rt,
	input [4:0] ex_destination,
	input [4:0] mem_register,
	input [4:0] wb_destination,
	input [31:0] instruction,
	output reg flush,
	output reg stall,
	output reg stallpc

);

reg hold;

initial 
begin
	hold = 1'b0;
	stall = 1'b0;
	stallpc = 1'b0;
	flush = 1'b0;

end

always @(*)
begin

	if(instruction == 32'd0 && hold == 1'b1)
		begin
			stallpc <= 1'b1;
		end
	
	if(((id_rs == ex_destination || id_rt == ex_destination ) && (ex_destination != 5'd0)) || ((mem_register == id_rs || mem_register == id_rt) && mem_register != 5'd0) || (((wb_destination == id_rs || wb_destination == id_rt) && wb_destination != 5'd0)) && instruction != 32'd0)
		begin
			stallpc <= 1'b1;
			stall <= 1'b1;
			if(branchorjump == 1'b1)
				begin
					stallpc <= 1'b0;
					hold <= 1'b1;
				end
		end
	else if(branchorjump == 1'b1)
		begin
			flush <= 1'b1;
		end
	else
		begin
			flush <= 1'b0;
		end
		
	if(start == 1'b1)
		begin
			hold <= 1'b0;
			stallpc <= 1'b0;
			stall <= 1'b0;
		end
	/*
	else 
	begin
		stallpc <= 1'b0;
	end
	*/
	
		
end

/*
always @(*)
begin
	if((id_rs == ex_destination || id_rt == ex_destination || branchorjump == 1'b1) &&  instruction != 32'd0)
		begin
			stallpc <= 1'b1;
			if(branchorjump == 1'b1)
				begin
					flush <= 1'b1;
				end
			else
				begin
					flush <= 1'b0;
				end
		end
	else
		begin
			flush <= 1'b0;
			stallpc <= 1'b0;
		end 
end
*/
	
endmodule