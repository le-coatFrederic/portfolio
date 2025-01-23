package online.fredinfo.portfolio.domain.usecases.CompanyCRUD;

import online.fredinfo.portfolio.domain.entities.Company;
import online.fredinfo.portfolio.domain.entities.CompanyRepository;

import java.util.List;
import java.util.UUID;

public class FindCompanyUseCase {
    private final CompanyRepository companyRepository;

    public FindCompanyUseCase(CompanyRepository companyRepository) {
        this.companyRepository = companyRepository;
    }

    public CompanyRepository getCompanyRepository() {
        return companyRepository;
    }

    public Company execute(UUID companyId) {
        return this.companyRepository.findByCompanyId(companyId);
    }

    public List<Company> execute() {
        return this.companyRepository.findAll();
    }

    public List<Company> execute(String companyName) {
        return this.companyRepository.findByCompanyName(companyName);
    }
}
